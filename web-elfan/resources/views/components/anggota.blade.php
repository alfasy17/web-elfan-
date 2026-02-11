<section class="team-section">
    <div class="container">
        <h2 class="text-center mb-5">Anggota Kelompok 2</h2>
        
        <div class="team-grid">
            @php
                // Data anggota disimpan dalam array agar mudah diatur
                $members = [
                    ['nama' => 'Ifad', 'foto' => 'DSC04906.jpeg'],
                    ['nama' => 'si bonT', 'foto' => 'DSC04902 (1).jpeg'],
                    ['nama' => 'Mas Hasbi', 'foto' => 'DSC04912.jpeg'],
                    ['nama' => 'musa', 'foto' => 'DSC04935.jpeg'],
                ];
            @endphp

            @foreach($members as $member)
            <div class="member-card">
                <div class="member-image">
                    <img src="{{ asset('img/' . $member['foto']) }}" alt="{{ $member['nama'] }}">
                </div>
                <div class="member-info">
                    <h3>{{ $member['nama'] }}</h3>
                    <p>Anggota Tim</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
