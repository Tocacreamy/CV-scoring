<?php

namespace Database\Seeders;

use App\Models\Rekomendasi;
use Illuminate\Database\Seeder;

class RekomendasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rekomendasi::create([
            'nama' => 'Manajer Proyek',
            'deskripsi' => 'Mengelola dan memimpin tim proyek besar untuk mencapai tujuan dengan efisiensi dan efektivitas tinggi.',
            'image' => 'rekomendasi/manajer-proyek.jpg',
            'grade' => 'A'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Konsultan Strategi',
            'deskripsi' => 'Memberikan nasihat strategis kepada perusahaan untuk merancang dan melaksanakan rencana bisnis jangka panjang.',
            'image' => 'rekomendasi/konsultan-strategi.jpg',
            'grade' => 'A'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pengembang Perangkat Lunak Senior',
            'deskripsi' => 'Mengembangkan perangkat lunak dan sistem dengan tingkat kesulitan tinggi, termasuk arsitektur dan desain sistem.',
            'image' => 'rekomendasi/pengembang-perangkat-lunak-senior.jpg',
            'grade' => 'A'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Peneliti',
            'deskripsi' => 'Mengembangkan penemuan baru dalam bidang teknologi, sains, atau kesehatan berdasarkan penelitian dan eksperimen.',
            'image' => 'rekomendasi/peneliti.jpg',
            'grade' => 'A'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pemasar Digital Senior',
            'deskripsi' => 'Merancang kampanye pemasaran digital yang kompleks dengan analisis data dan peningkatan hasil secara berkelanjutan.',
            'image' => 'rekomendasi/pemasar-digital-senior.jpg',
            'grade' => 'A'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Supervisor',
            'deskripsi' => 'Memimpin dan mengawasi tim dalam menyelesaikan tugas harian sambil memastikan pencapaian target kerja.',
            'image' => 'rekomendasi/supervisor.jpg',
            'grade' => 'B'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Analis Data',
            'deskripsi' => 'Mengolah dan menganalisis data untuk memberikan wawasan dan rekomendasi yang membantu keputusan bisnis.',
            'image' => 'rekomendasi/analis-data.jpg',
            'grade' => 'B'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pengembang Perangkat Lunak Junior',
            'deskripsi' => 'Mengembangkan aplikasi dan fitur baru dengan pengawasan minimal dan kemampuan untuk belajar dan berkembang.',
            'image' => 'rekomendasi/pengembang-perangkat-lunak-junior.jpg',
            'grade' => 'B'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Desainer Grafis',
            'deskripsi' => 'Membuat desain visual untuk berbagai media dan platform, dari iklan hingga situs web.',
            'image' => 'rekomendasi/desainer-grafis.jpg',
            'grade' => 'B'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Koordinator Pemasaran',
            'deskripsi' => 'Mengelola kampanye pemasaran yang mendukung brand dan produk untuk meningkatkan penjualan dan visibilitas.',
            'image' => 'rekomendasi/koordinator-pemasaran.jpg',
            'grade' => 'B'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Asisten Administrasi',
            'deskripsi' => 'Mendukung pekerjaan administrasi, pengelolaan dokumen, dan perencanaan jadwal harian untuk meningkatkan efisiensi kantor.',
            'image' => 'rekomendasi/asisten-administrasi.jpg',
            'grade' => 'C'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Staf Penjualan',
            'deskripsi' => 'Mengelola transaksi penjualan dan berinteraksi dengan pelanggan untuk mencapai target penjualan yang ditentukan.',
            'image' => 'rekomendasi/staf-penjualan.jpg',
            'grade' => 'C'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Customer Service',
            'deskripsi' => 'Memberikan layanan pelanggan yang baik, menangani keluhan, dan memberikan solusi yang cepat dan tepat.',
            'image' => 'rekomendasi/customer-service.jpg',
            'grade' => 'C'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Operator Produksi',
            'deskripsi' => 'Mengoperasikan mesin atau peralatan dalam proses produksi, memastikan kelancaran produksi sesuai dengan standar kualitas.',
            'image' => 'rekomendasi/operator-produksi.jpg',
            'grade' => 'C'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Content Writer',
            'deskripsi' => 'Menulis artikel, blog, atau materi pemasaran dengan gaya penulisan yang sesuai dengan audiens dan tujuan perusahaan.',
            'image' => 'rekomendasi/content-writer.jpg',
            'grade' => 'C'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pekerja Magang',
            'deskripsi' => 'Mendapatkan pengalaman praktis dalam berbagai bidang pekerjaan yang membutuhkan pembelajaran intensif dan bimbingan.',
            'image' => 'rekomendasi/pekerja-magang.jpg',
            'grade' => 'D'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Staf Pendukung',
            'deskripsi' => 'Membantu tim dengan tugas-tugas operasional dasar yang mendukung kelancaran proses kerja sehari-hari.',
            'image' => 'rekomendasi/staf-pendukung.jpg',
            'grade' => 'D'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pekerja Lapangan',
            'deskripsi' => 'Melakukan tugas fisik atau pekerjaan lapangan yang mendukung operasi bisnis, seperti pengiriman atau pemeliharaan.',
            'image' => 'rekomendasi/pekerja-lapangan.jpg',
            'grade' => 'D'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Penyusun Data',
            'deskripsi' => 'Mengumpulkan dan menyusun data dasar untuk keperluan analisis atau laporan lebih lanjut oleh tim yang lebih berpengalaman.',
            'image' => 'rekomendasi/penyusun-data.jpg',
            'grade' => 'D'
        ]);
    
        Rekomendasi::create([
            'nama' => 'Pekerja Serabutan',
            'deskripsi' => 'Membantu dalam pekerjaan-pekerjaan yang beragam, seperti pembersihan, pengemasan, atau tugas ringan lainnya yang mendukung tim.',
            'image' => 'rekomendasi/pekerja-serabutan.jpg',
            'grade' => 'D'
        ]);
    }    
}
