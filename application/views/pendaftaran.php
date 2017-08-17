<div class="container">
<?php echo form_open_multipart('pendaftaran/multiple_upload'); ?>
    <form role="form" style="width:700px; margin: 0 auto;">
        <h1>Form Pendaftaran</h1>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Judul Penelitian</div>
            </div>
            <input type="text" placeholder="Masukkan Judul Penelitian *" name="judul" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">No Surat</div>
            </div>
            <input type="text" placeholder="Masukkan Nomor Surat *" name="no_surat" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Bidang Penelitian</div>
            </div>
            <select name="kategori" id="kategori" class="form-control">
				<option value="0">Pilih Bidang Penelitian</option>
				<option value="Agrobisnis & Pangan">Agrobisnis & Pangan</option>
				<option value="Energi">Energi</option>
				<option value="Kehutanan & Lingkungan Hidup">Kehutanan & Lingkungan Hidup</option>
				<option value="Kelautan & Perikanan">Kelautan & Perikanan</option>
				<option value="Kesehatan, Obat & Kosmetika">Kesehatan, Obat & Kosmetika</option>
				<option value="Pendidikan">Pendidikan</option>
				<option value="Rekayasa & Manufaktur">Rekayasa & Manufaktur</option>
				<option value="Kerajinan & Industri Rumah Tangga">Kerajinan & Industri Rumah Tangga</option>
				<option value="Sosial">Sosial</option>
			</select>
        </div>
        <div class="required-field-block">
        	<div class="required-icon">
                <div class="text">Bidang Penelitian Lain</div>
            </div>
            <select name="kategori_lain" id="kategori_lain" class="form-control">
				<option value="0">Pilih Bidang Penelitian Lain</option>
				<option value="Agrobisnis & Pangan">Agrobisnis & Pangan</option>
				<option value="Energi">Energi</option>
				<option value="Kehutanan & Lingkungan Hidup">Kehutanan & Lingkungan Hidup</option>
				<option value="Kelautan & Perikanan">Kelautan & Perikanan</option>
				<option value="Kesehatan, Obat & Kosmetika">Kesehatan, Obat & Kosmetika</option>
				<option value="Pendidikan">Pendidikan</option>
				<option value="Rekayasa & Manufaktur">Rekayasa & Manufaktur</option>
				<option value="Kerajinan & Industri Rumah Tangga">Kerajinan & Industri Rumah Tangga</option>
				<option value="Sosial">Sosial</option>
			</select>
        </div>
        <div class="required-field-block">
        	<div class="required-icon">
                <div class="text">Lokasi Penelitian</div>
            </div>
            <input type="text" placeholder="Masukkan Lokasi Penelitian *" name="lokasi_penelitian" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Tanggal Mulai Penelitian *</div>
            </div>
            <input type="date" class="form-control" name="tanggal_mulai_penelitian">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Tanggal Selesai Penelitian *</div>
            </div>
            <input type="date" class="form-control" name="tanggal_selesai_penelitian">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">No Surat Instansi</div>
            </div>
            <input type="text" name="no_surat_instansi" placeholder="Masukkan No Surat Instansi *" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Penanggung Jawab Penelitian</div>
            </div>
            <input type="text" name="penanggung_jawab" placeholder="Masukkan Penanggung Jawab Penelitian *" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">Anggota Penelitian</div>
            </div>
            <input type="text" name="pengikut" placeholder="Masukkan Anggota Penelitian *" class="form-control">
        </div>
        <div class="required-field-block">
        	<div class="required-icon">
                <div class="text">Data Pemohon</div>
            </div>
            <textarea rows="5" class="form-control" name="data_pemohon" placeholder="Masukkan Data Pemohon"></textarea>
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">* Scan Surat Permohonan Instansi</div>
            </div>
            <input type="file" name="scan_surat_permohonan_instansi" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">* Scan Identitas Diri</div>
            </div>
            <input type="file" name="scan_identitas" class="form-control">
        </div>
        <div class="required-field-block">
         <div class="required-icon">
                <div class="text">* Foto Berwarna</div>
            </div>
            <input type="file" name="foto_berwarna" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">* Proposal Penelitian</div>
            </div>
            <input type="file" name="proposal" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">* Surat Penyerahan Hasil</div>
            </div>
            <input type="file" name="hasil" class="form-control">
        </div>
        <div class="required-field-block">
        <div class="required-icon">
                <div class="text">* Scan Surat Rekomendasi</div>
            </div>
            <input type="file" name="rekomendasi" class="form-control">
        </div>
        <button class="btn btn-primary">Send</button>
    </form>
    <?php echo form_close() ?>
</div>