@extends('layouts.app')

@section('title', 'Penempatan Magang - TRPL Politeknik Meta Industri')

@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Penempatan Magang</li>
                </ol>
            </div>
        </nav>
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Penempatan Magang</h1>
                        <p class="mb-0">Daftar mahasiswa dan lokasi penempatan magang.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Page Title -->

    <section id="penempatan-magang" class="magang section">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Penempatan Magang</h2>
                <p>Daftar mahasiswa dan lokasi penempatan magang</p>
            </div>

            <div class="magang-toolbar">
                <input id="magangSearch" class="magang-search" type="search"
                    placeholder="Cari perusahaan / mahasiswa / NIM..." />
                <span id="magangCount" class="magang-count"></span>
            </div>

            <div class="accordion magang-accordion" id="magangAccordion"></div>
        </div>
    </section>
@endsection

@section('extra-js')
<script>
    (async function(){
      const acc = document.getElementById("magangAccordion");
      const search = document.getElementById("magangSearch");
      const countEl = document.getElementById("magangCount");

      // Use data from PHP instead of fetching static JSON
      const companies = @json($magangs).map(c => ({
          nama: c.company_name,
          lokasi: c.location,
          mahasiswa: c.student_list,
          periode: c.academic_year
      }));

      function normalize(s){ return (s || "").toString().toLowerCase(); }

      function render(list){
        let totalMahasiswa = 0;

        acc.innerHTML = list.map((c, idx) => {
          const companyId = `company-${idx}`;
          const collapseId = `collapse-${idx}`;
          const lokasi = c.lokasi ? ` <span style="opacity:.7;font-weight:500">(${c.lokasi})</span>` : "";

          const mahasiswa = c.mahasiswa || [];
          totalMahasiswa += mahasiswa.length;

          const rows = mahasiswa.length ? mahasiswa.map((m) => `
            <tr>
              <td data-label="Nama">${m.nama || "-"}</td>
              <td data-label="NIM">${m.nim || "-"}</td>
              <td data-label="Divisi">${m.divisi || "-"}</td>
              <td data-label="Periode">${m.periode || "-"}</td>
            </tr>
          `).join("") : `
            <tr><td colspan="4" style="padding:12px;opacity:.7;">Belum ada data mahasiswa.</td></tr>
          `;

          return `
            <div class="accordion-item">
              <h2 class="accordion-header" id="${companyId}">
                <button class="accordion-button collapsed" type="button"
                  data-bs-toggle="collapse" data-bs-target="#${collapseId}"
                  aria-expanded="false" aria-controls="${collapseId}">
                  ${c.nama}${lokasi}
                </button>
              </h2>
              <div id="${collapseId}" class="accordion-collapse collapse" aria-labelledby="${companyId}" data-bs-parent="#magangAccordion">
                <div class="accordion-body">
                  <div style="display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;margin-bottom:10px;">
                    <div><strong>Total mahasiswa:</strong> ${mahasiswa.length}</div>
                    <div style="opacity:.75;"><strong>Periode:</strong> ${c.periode || "-"}</div>
                  </div>

                  <div class="table-responsive">
                    <table class="magang-table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>NIM</th>
                          <th>Divisi</th>
                          <th>Periode</th>
                        </tr>
                      </thead>
                      <tbody>${rows}</tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          `;
        }).join("");

        countEl.textContent = `Perusahaan: ${list.length} • Mahasiswa: ${totalMahasiswa}`;
      }

      // initial render
      render(companies);

      // search filter
      search.addEventListener("input", () => {
        const q = normalize(search.value);
        if (!q) return render(companies);

        const filtered = companies
          .map(c => {
            const hitCompany = normalize(c.nama).includes(q) || normalize(c.lokasi).includes(q);
            const mahasiswa = (c.mahasiswa || []).filter(m =>
              normalize(m.nama).includes(q) ||
              normalize(m.nim).includes(q) ||
              normalize(m.divisi).includes(q) ||
              normalize(m.periode).includes(q)
            );

            if (hitCompany) return c;               // kalau perusahaan match, tampilkan semua mahasiswa
            if (mahasiswa.length) return { ...c, mahasiswa }; // kalau mahasiswa match, tampilkan yg match saja
            return null;
          })
          .filter(Boolean);

        render(filtered);
      });
    })();
</script>
@endsection
