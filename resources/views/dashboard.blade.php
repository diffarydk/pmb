<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="landing-page-destkop">
        <div class="div">
            <div class="daftar-section">
                <div class="overlap">
                    <div class="rectangle"></div>
                    <nav>
                        <div class="menu-bar">
                            <div class="logo">
                                <img class="nusteng" src="img/nusteng 1.png" />
                                <div class="nusteng_logo">Universitas<br />Nusantara</div>
                            </div>
                            <div class="menu-links">
                                <a href="#" class="menu-link" data-target="tentang-kami">Tentang Kami</a>
                                <a href="#" class="menu-link" data-target="jurusan-fasilitas">Lihat</a>
                                <a href="{{route('document.input')}}" class="menu-link" data-target="biaya-button">Form</a>
                                <a href="{{route('profile.edit')}}" class="menu-link" data-target="biaya-button">{{Auth::user()->name}}</a>
                            </div>
                        </div>  
                    </nav>
                    <div class="text-wrapper-4">AYO, Daftar Sekarang!</div>
                    <p class="bergabunglah-dengan">
                        Bergabunglah dengan Universitas Nusantara&nbsp;&nbsp;dan temukan kesempatan tak terbatas untuk
                        meraih
                        keberhasilan. Kami adalah tempat di mana ide-ide luar biasa diwujudkan, bakat ditemukan, dan
                        masa depan
                        dibentuk.
                    </p>
                    <div class="component-2">
                        <img class="vector" src="img/pensil.png" />
                        <a href="#"></a><button type="button" class="btn">Daftar Sekarang</button>
                        <!-- <div class="button-text-2">Daftar Sekarang</div> -->
                    </div>
                    <div class="akre">
                        <div class="overlap-group">
                            <div class="group">
                                <div class="overlap-group-2">
                                    <div class="rectangle-2"></div>
                                    <div class="rectangle-3"></div>
                                </div>
                            </div>
                            <div class="text-wrapper-5">Berakreditas A</div>
                        </div>
                    </div>
                    <div class="digital-learning">
                        <div class="akreditasi">
                            <div class="group">
                                <div class="overlap-group-2">
                                    <div class="rectangle-2"></div>
                                    <div class="rectangle-3"></div>
                                </div>
                            </div>
                            <div class="text-wrapper-6">Digital Learning</div>
                        </div>
                    </div>
                    <img class="element-students" src="img/student.png" />
                </div>
            </div>
            <div class="testi-section">
                <div class="overlap-2">
                    <img class="img" src="img/Ellipse 7.svg" />
                    <div class="rectangle-4"></div>
                    <div class="rectangle-5"></div>
                    <div class="testi">
                        <div class="testi-konten">
                            <p class="amazing-school-keren">
                                Saya Berkembang dan belajar banyak hal di sekolah ini. Terimakasih Nusantara 1
                            </p>
                        </div>
                        <div class="name-image">
                            <div class="testi-nama">
                                <div class="text-wrapper-7">Diffary Dzikri</div>
                                <div class="text-wrapper-8">Siswa, Rekayasa Perangkat Lunak</div>
                            </div>
                            <div class="test-foto"><img class="ellipse" src="img/Ellipse 1.png" /></div>
                        </div>
                    </div>
                    <div class="testi-2">
                        <div class="amazing-school-keren-wrapper">
                            <p class="amazing-school-keren">Terimakasih Guru Guru SMK Nusantara 1 telah mengabdi kepada
                                negara</p>
                        </div>
                        <div class="name-image">
                            <div class="testi-nama">
                                <div class="text-wrapper-7">M. Yusuf</div>
                                <div class="text-wrapper-8">Siswa, Rekayasa Perangkat Lunak</div>
                            </div>
                            <div class="test-foto"><img class="ellipse" src="img/Ellipse 3.png" /></div>
                        </div>
                    </div>
                    <div class="testi-3">
                        <div class="testi-konten">
                            <p class="amazing-school-keren">
                                Saya banyak belajar mengenai jaringan dan komputer di SMK Nusantara 1
                            </p>
                        </div>
                        <div class="name-image">
                            <div class="testi-nama">
                                <div class="text-wrapper-7">Putri Tanjung</div>
                                <div class="siswa-rekayasa">Siswi, Teknik Komputer Jaringan</div>
                            </div>
                            <div class="test-foto"><img class="ellipse" src="img/Ellipse 2.png" /></div>
                        </div>
                    </div>
                    <p class="p">
                        Di Universitas Nusantara , kami berkomitmen untuk membantu Anda mewujudkan potensi terbaik Anda.
                        Kami
                        tidak hanya sekadar sekolah, tetapi juga sebuah komunitas yang menginspirasi dan mendorong siswa
                        untuk
                        meraih kesuksesan di dunia nyata.
                    </p>
                    <div class="heading">
                        <p class="heading-2">Apa Yang Mahasiswa kami katakan</p>
                    </div>
                    <div class="button-text-wrapper">
                        <div class="button-text-3">Lebih Lanjut</div>
                    </div>
                </div>
            </div>
            <div class="section-jurusan">
                <div class="overlap-3">
                    <div class="overlap-group-3">
                        <p class="rekayasa-perangkat">
                            Rekayasa Perangkat Lunak adalah seni menciptakan solusi teknologi yang mengubah dunia. Di
                            balik setiap
                            aplikasi, website, dan sistem yang kita gunakan, terdapat proses yang kompleks dan kreatif
                            yang
                            melibatkan pemikiran analitis, desain yang cermat, dan pengembangan perangkat lunak yang
                            handal.<br />Sebagai
                            bidang yang terus berkembang, Rekayasa Perangkat Lunak menggabungkan ilmu pengetahuan dengan
                            kreativitas
                            untuk menciptakan solusi yang menginspirasi. Ini melibatkan pemahaman mendalam tentang
                            kebutuhan
                            pengguna, perencanaan yang matang, dan implementasi yang presisi.
                        </p>
                        <img class="shape-image" src="img/fakultas.png" />
                        <div class="heading-wrapper">
                            <div class="heading-3">Teknik Universitas Nusantara</div>
                        </div>
                        <div class="sub-judul-fakul">
                            <div class="heading-4">Fakultas</div>
                        </div>
                    </div>
                    <div class="component-3">
                        <div class="button-text-3">Pelajari Lebih Lanjut</div>
                    </div>
                    <img class="carosel" src="img/carosel.svg" />
                </div>
            </div>
            <div class="about-us-section">
                <div class="overlap-4">
                    <img class="group-2" src="img/Ellipse 3.svg" />
                    <img class="group-3" src="img/Ellipse 2.svg" />
                    <img class="rectangle-6" src="img/tentang_kami.png" />
                    <p class="di-universitas">
                        Di Universitas Nusantara&nbsp;&nbsp;- Pusat Inovasi dan Kreativitas, kami memiliki dedikasi yang
                        tinggi
                        untuk memberikan pendidikan berkualitas tinggi yang mempersiapkan siswa untuk sukses di dunia
                        nyata. Kami
                        adalah lembaga pendidikan yang berfokus pada pengembangan potensi siswa dan mempersiapkan mereka
                        untuk
                        tantangan masa depan.<br />Visi kami adalah menjadi pusat keunggulan dalam pendidikan, di mana
                        inovasi dan
                        kreativitas menjadi landasan untuk menghasilkan individu yang berdaya saing. Kami berkomitmen
                        untuk
                        menyediakan lingkungan belajar yang inspiratif, memadukan kurikulum yang relevan dengan praktik
                        terkini,
                        dan memperkenalkan siswa kepada teknologi yang terbaru.<br />Dalam misi kami, kami mendorong
                        siswa untuk
                        mengeksplorasi minat mereka, membangun keterampilan yang dibutuhkan oleh industri, dan
                        mengembangkan jiwa
                        kepemimpinan. Kami percaya bahwa setiap siswa memiliki potensi yang luar biasa dan kami berusaha
                        memberikan pendampingan yang tepat guna agar mereka dapat mencapai kesuksesan sejati.
                    </p>
                    <div class="heading-5">
                        <div class="heading-6">Tentang Kami</div>
                    </div>
                </div>
            </div>
            <div class="section-berita">
                <div class="overlap-5">
                    <img class="group-4" src="img/Ellipse 5.svg" />
                    <img class="group-5" src="img/Ellipse 6.svg" />
                    <img class="group-6" src="img/Ellipse 2.svg" />
                    <img class="group-7" src="img/Ellipse 6.svg" />
                    <div class="frame">
                        <div class="frame-2">
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                        </div>
                        <div class="frame-2">
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                        </div>
                        <div class="frame-2">
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                            <div class="rectangle-7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="contact-info">
                    <div class="logo-2">
                        <img class="nusteng" src="img/nusteng 1.png" />
                        <div class="text-wrapper">Univesitas<br />Nusantara</div>
                    </div>
                    <div class="flexcontainer">
                        <p class="text">
                            <span class="span">Gedung Nusantara 1<br /></span>
                        </p>
                        <p class="text">
                            <span class="span">Kampus Terpadu Universitas Nusantara<br /></span>
                        </p>
                        <p class="text">
                            <span class="span">Jalan Cisadane VII-VIII Perumnas 1 Kota Tangerang, 15116 Indonesia</span>
                        </p>
                    </div>
                    <div class="text-wrapper-9">univ.nusantara</div>
                    <div class="flexcontainer-2">
                        <p class="span-wrapper">
                            <span class="text-wrapper-10">Customer Service<br /></span>
                        </p>
                        <p class="span-wrapper">
                            <span class="text-wrapper-11">Nomor Layanan (021) 898-575 <br /></span>
                        </p>
                        <p class="span-wrapper">
                            <span class="text-wrapper-11">Nomor Layanan Whatsapp +62087349502321<br /></span>
                        </p>
                        <p class="span-wrapper"><span class="text-wrapper-11">E-mail: admin@nusantara.uni</span></p>
                    </div>
                    <div class="text-wrapper-12">Universitas Nusantara</div>
                    <div class="text-wrapper-13">Kantor Penerimaan Mahasiswa Baru</div>
                    <p class="text-wrapper-14">Temukan Kami Di Medial Sosial</p>
                    <img class="facebook-logo-icon" src="img/fbicon.png" />
                    <img class="instagram-logo-icon" src="img/igicon.png" />
                </div>
                <div class="about">
                    <div class="flexcontainer-3">
                        <p class="span-wrapper">
                            <span class="text-wrapper-10">Akreditasi Institusi Unggul<br /></span>
                        </p>
                        <p class="span-wrapper">
                            <span class="text-wrapper-15">Universitas Nusantara telah mendapatkan Akreditasi Institusi
                                Unggul dari Badan Akreditasi Nasional
                                Perguruan Tinggi (BAN-PT) pada tahun 1997</span>
                        </p>
                    </div>
                    <img class="ranked-removebg" src="img/ranked2021.png" />
                    <img class="INTI-QS-ranked" src="img/ranked2023.png" />
                    <img class="AF-removebg-preview" src="img/top100.png" />
                </div>
                <div class="quote">
                    <div class="text-wrapper-16">Docendo discimus</div>
                    <div class="text-wrapper-17">“Dengan Mengajar, Kita Belajar.”</div>
                </div>
            </footer>
            <div class="heading-7">
                <div class="heading-8">Berita Terkini</div>
            </div>
        </div>
    </div>
</body>

</html>