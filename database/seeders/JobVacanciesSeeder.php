<?php

namespace Database\Seeders;

use App\Models\JobVacancy;
use Illuminate\Database\Seeder;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileCannotBeAdded;

class JobVacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws FileCannotBeAdded
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Salesman',
                'description' => 'We are finding Salesman right now',
                'requirements' => [
                    'Pendidikan minimal Diploma (D3)',
                    'Memiliki kemampuan dalam pemasaran dan penjualan',
                    'Dapat mengendarai motor (memiliki SIM C)',
                    'Penempatan di cabang Semarang',
                ],
                'job_desks' => [
                    'Work as a sales man',

                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => "Semarang, Central Java, Indonesia",
                'company' => "PT. TRI SAPTA JAYA(KALBE GROUP)",
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hiredtoday.com/en/jobs-detail/salesman-semarang-kedungmundu?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral',
                'pictureId' => 'https://media-exp1.licdn.com/dms/image/C510BAQHsHu40ibGGPw/company-logo_200_200/0/1531043888231?e=2147483647&v=beta&t=3z4cEu9lxH-qsj71opQu4YSsWmWuKC0uOSEp22UXiGU',
            ],


            [
                'title' => 'HR Admin',
                'description' => 'Ninja Van is a tech - enabled logistics company on a mission to provide hassle - free delivery services for businesses of all sizes across Southeast Asia . Launched in 2014, we started operations in Singapore and have become the region\'s largest and fastest growing last-mile logistics company, partnering with over 35,000 merchants and delivering more than 1,000 parcels every minute across six countries.',
                'requirements' => [
                    'Minimal 1 year experience as an HR Administrator, HR Administrative Assistant or relevant role',
                    'Computer literacy (MS Office applications, in particular)',
                    'Excellent organizational skills, with an ability to prioritize important projects',
                    'Meticulous, and detail oriented',
                ],
                'job_desks' => [
                    'Organize and maintain personnel records',
                    'Update internal databases',
                    'Prepare HR documents, like employment contracts and new hire guides',
                    'Assist payroll department by providing relevant employee information',

                ],
                'job_category' => 'Contract',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. TRI SAPTA JAYA(KALBE GROUP)',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://jobs.lever.co/ninjavan/e7aeb643-06af-45ba-aa5a-e78fba52e6c5',
                'pictureId' => 'https://media-exp1.licdn.com/dms/image/C510BAQHsHu40ibGGPw/company-logo_200_200/0/1531043888231?e=2147483647&v=beta&t=3z4cEu9lxH-qsj71opQu4YSsWmWuKC0uOSEp22UXiGU',
            ],


            [
                'title' => 'Staff Admin',
                'description' => 'Company Description: PT Kontak Perkasa Futures (“KPF”) adalah perusahaan pialang berjangka terpercaya yang berdiri sejak tahun 2000. Dengan dukungan 7 kantor operasional yang tersebar di Jakarta, Bandung, Surabaya, Yogyakarta, Semarang, Makassar dan Bali. Anggota dari PT Bursa Berjangka Jakarta dan PT Kliring Berjangka (Persero) Indonesia, PT Kontak Perkasa Futures merupakan pialang berjangka resmi yang terdaftar dan diawasi oleh Badan Pengawas Perdagangan Berjangka Komoditi (BAPPEBTI).',
                'requirements' => [
                    'Wanita, S1/D3 segala jurusan',
                    'Menguasai komputer (M.S Office)',
                    'Warga Negara Indonesia (WNI)',
                    'Memiliki Identitas KTP',
                    'Memiliki ketelitian yang tinggi dan displin dalam bekerja',
                ],
                'job_desks' => [
                    'Staff Admin',
                    'Melakukan pengolahan data secara akurat',
                    'Melayani, mengolah dan memeriksa reporting yang dikirimkan kepada customer',
                    'Mencari informasi data reporting',
                    'Memasukan data dan informasi ke dalam database perusahaan',

                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. KONTAK PERKASA FUTURES SEMARANG',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hiredtoday.com/en/jobs-detail/staff-admin-wonotingal-aa45820e-a353-4e2a-86fc-d29ef4764053?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral',
                'pictureId' => 'https://media-exp1.licdn.com/dms/image/C4D0BAQHPlPwLHuCrfQ/company-logo_200_200/0/1519902747805?e=2147483647&v=beta&t=-39LfpPkXfOtzCUlv2zbHqQn-E51t7PJvli_55a1hi0',
            ],

            [
                'title' => 'Admin Akuntansi Internship',
                'description' => 'PT. SEPUTRA ADIAJI NUGROHO was established in 1993 and continues to work in various sectors supported by experienced and competent experts and resources. During the establishment, PT. SEPUTRA ADIAJI NUGROHO has successfully completed the work by prioritizing quality and customer satisfaction while continued to prioritize occupational safety, health and safety.',
                'requirements' => [
                    'Jurusan akuntansi',
                    'Bersedia fulltime',
                    'Memiliki laptop pribadi',
                ],
                'job_desks' => [
                    'Membantu kegiatan divisi finance',

                ],
                'job_category' => 'Internship',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. SEPUTRA ADIAJI NUGROHO',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hiredtoday.com/en/jobs-detail/admin-akuntansi-internship-ngesrep?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral',
                'pictureId' => 'https://www.hiredtoday.com/employer/images/2022/11/10/435ef18307.png',
            ],

            [
                'title' => 'Application Development Analyst',
                'description' => 'We are looking for an Application Development Analyst to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => [
                    'Bachelors Degree in Information Technology, Computer Science or other relevant fields.',
                    'Open for fresh graduates with/without work experience.',
                    'Hands-on knowledge of front end development technologies such as JavaScript, HTML, CSS, SASS, AJAX and JSON',
                    'Experience with one or more JavaScript libraries and/or frameworks such as ReactJS, Node.js, Ember, AngularJS, Backbone etc.',
                    'Willing to work in semarang'
                ],
                'job_desks' => [
                    'Working as part of a team to design and implement enterprise level dynamic web applications such as media portals, content management systems, e-commerce sites or banking portals',
                    'Translation of User Stories into source code on various technical platforms and within waterfall or agile delivery environments',
                    'Integration of established 3rd party services such as video content management solutions, Cloud infrastructure service web analytics or commercial transaction service providers',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang',
                'company' => 'Accenture',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.accenture.com/id-en/careers/jobdetails?id=R00136458_en&src=LINKEDINJP',
                'pictureId' => 'https://static.wixstatic.com/media/349ea3_1e21d901ec0848aa976b795b03de66c3~mv2.png/v1/fill/w_1024,h_683,al_c,q_90/file.jpg',
            ],


            [
                'title' => 'Mobile Frontend Developer',
                'description' => 'We are looking for a Mobile Frontend Developer to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => [
                    'B.S. in Computer Science, Information Systems or equivalent',
                    'Minimum 3 year’s experience in mobile application development & environment',
                    'HanAt least 3 years hands on knowledge & experience in the following: Git, Restful API, Mobile App Development Frameworks',
                    'Deep understanding of developing UI components that can be used and accessed across the whole mobile',
                    'Very good understanding of source code management for cross platform development using industry best practices for frontend and mobile applications Detail-oriented with eyes sensitive to the aesthetics of UI',
                    'Self-starter & team player',
                    'Analytical & good problem solving skills',
                    'Good verbal, written and interpersonal skills'
                ],
                'job_desks' => [
                    'Scope, design and deliver pixel-perfect mobile applications based on wireframes and design requirements in collaboration with back end developers to create a comprehensive digital solution that meets the customer’s business',
                    'Optimize mobile applications for maximum speed',
                    'Architect and implement mobile UI/UX based on provided wireframes and business',
                    'Gather, document and analyze business requirements in order to help define scope of software development May include mobile mock-ups and interaction prototyping.',
                    'Produce and maintain technical documentation related to front-end modules (e.q. scope requirements, logical and technical designs, testing and implementation plans).',
                    'Troubleshoot and implement bug fixes related to client and user reported',
                    'Play proactive support role and take ownership of technical issues, and work with internal/ cross functional/ external team to resolve more advanced issues when',
                    'Collaborate with team members in all aspect of software design, coding, testing, documentation & deployment',
                    'Deliverables in agile scrum approach'
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'Beyondsoft',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://beyondsoft.recruiterpal.com/career/jobs/6nbql',
                'pictureId' => 'https://media-exp1.licdn.com/dms/image/C560BAQH1ZAa0FjifaA/company-logo_200_200/0/1643182117118?e=1672272000&v=beta&t=Rel17N6xHLQljochUjRKnxConOGDqa-Tzd3MVY_agP0',
            ],


            [
                'title' => 'Junior Business Analyst',
                'description' => 'BCA terus bertumbuh dengan puluhan ribu karyawan yang tersebar di berbagai kantor BCA di seluruh Indonesia. Berbagai penghargaan di bidang pengelolaan sumber daya manusia juga diraih oleh BCA, seperti Gallup Great Workplace 2019, Indonesia Human Capital Award (IHCA) 2021, HR Asia Award 2021 dan lainnya. Hal ini menjadi bukti nyata bahwa kami selalu berupaya menciptakan lingkungan kerja yang menyenangkan serta senantiasa memberikan ruang bagi para karyawan untuk dapat terus tumbuh dan berkembang.',
                'requirements' => [
                    'S1 graduates from all majors in Engineering, Computer, Mathematics, Statistics, and Economics',
                    'Have interest in System or Product Development',
                    'Placement at Head Office (Jakarta)',
                    'Willing not to marry for 1 (one) year of education',
                    'Willing to undergo official bond after education',
                ],
                'job_desks' => [
                    'Exploring the needs of work units to obtain appropriate alternative solutions to assisting work units in the development process, designing policies, procedures and user requirements as needed.',
                    'Identifies gaps and provides technical expertise in business requirements for system functional specifications and scales new and current systems, processes and procedures in a cost effective manner.',
                    'Configures system settings and options; plans and executes unit, integration and acceptance testing to meet business requirements. Designs details of automated systems.',
                    'May provide consultation to users in the area of automated systems. May lead cross-functional linked teams to address business or systems issues.',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'BCA',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://karir.bca.co.id/job-fair/junior-business-analyst-okt-nov?utm_source=social%20organic&utm_medium=linkedin&utm_campaign=sac_bca-dtb-adm_all%20product_info-organic_social%20organic_nov_cps_linkedin|22110101912&utm_content=bankbca-linkedin-job%20posting',
                'pictureId' => 'https://baradesain.files.wordpress.com/2010/10/bca-bank-logo_logo-bagus-03.jpg?w=1200',
            ],

            [
                'title' => 'Data Scientist',
                'description' => 'We are looking for a Junior Business Analyst to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => [
                    'Minimum bachelor in statistics or mathematics or equivalent field related to science, engineering, energy, and economy',
                    'Experience using SQL, and statistical modelling and machine learning techniques',
                    'Experience in writing about renewable energy, science, energy monitoring, and follow the latest trends about energy',
                    'Experience in trends/forecasting analysis with data analytical',
                    'Have a good attitude, strong communicator, and fast learner',
                ],
                'job_desks' => [
                    'We are an advisory, database and project management for renewable energy and telco sector',

                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'PT CHAKRA GIRI ENERGI INDONESIA',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://glints.com/id/opportunities/jobs/data-scientist/ff57c931-ad7d-47dd-b25d-94e7df4c3fef',
                'pictureId' => 'https://pbs.twimg.com/profile_images/1045191468363608064/QEnRUZy__400x400.jpg',
            ],

            [
                'title' => 'Devops Engineer',
                'description' => 'PT. Nusantara Sejahtera Raya (Cinema XXI - The Premiere - Cinema 21) is the largest cinema chain in Indonesia. Currently, we had more than 150 cinemas in Indonesia with +700 screens and still expanding our business. Why join us? As market leader in cinema industry, our company is a great place to push your career to the next level with a culture built on collaboration and innovation. This is an organization where you are surrounded by smart and forward-thinking people. This is a chance to work',
                'requirements' => [
                    'Bachelor’s Degree from reputable university',
                    'Minimum experience 3+ years as DevOps Engineer',
                    'Strong Knowledge in on Containerizing & Clustering, such as Docker, Docker-Swarm, Kubernetes, PCF',
                    'Knowledge on various Cloud Services, such as GCP, AWS etc',
                    'Strong background in programming such as shell scripts, python, PHP, Java',
                    'Can debugging application leaks',
                    'Familiar with CI/CD concepts and tools such as Gitlab-CI, Concourse-CI',
                ],
                'job_desks' => [
                    'Design and implement continuous delivery systems for agile development.',
                    'Build automation for internal agile infrastructure process and support continuous enhancement.',
                    'Infrastructure automation in for accelerating Infrastructure SDLC process.',
                    'Collaborate with developers to refine build, test and release practice across the organization',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'PT. Nusantara Sejahtera Raya (Cinema 21)',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://talent.usedeall.com/job-detail/6371ba9ab562e60013efa3ee?utm_source=ig-feed&utm_medium=post&utm_campaign=promote&utm_content=de-xxi',
                'pictureId' => 'https://play-lh.googleusercontent.com/x2z5kFDyGWnLP3y-XfUBNR1vQd7ObVtciXqpegcuDTUmorXPAWGPeP7eIgOiDCGwywI',
            ],

            [
                'title' => 'Business Analyst for Non-Core System',
                'description' => 'Yayasan Pendidikan Pelita Harapan mendirikan Universitas Pelita Harapan pada tahun 1994 untuk mendidik anak bangsa dan memajukan dunia pendidikan Indonesia.
                Universitas Pelita Harapan mempunyai visi dan misi untuk secara terus menerus melakukan transformasi pendidikan secara total.
                Universitas Pelita Harapan bercita-cita untuk memberikan pendidikan yang berkualitas baik baik melalui global best practices, manajemen yang profesional, kemitraan strategis secara global, dan pendekatan yang bersifat people-oriented berdasarkan prinsip - prinsip Kristen. Proses pembelajaran yang khas untuk membangun keterampilan kepemimpinan, pembelajaran dan komunikasi, serta karakter dan sikap, membuat UPH memiliki reputasi yang kuat untuk untuk membentuk pengetahuan, iman dan karakter para mahasiswa.',
                'requirements' => [
                    'Assess current process flow and determine user requirements',
                    'Propose suitable solution that meet user needs but also technologically feasible (according to system architecture)',
                    'Identify any changes that will impact current process flow',
                    'Write functional requirement design based on user requirements',
                    'Prior experience in implementing ISO 27001, ITIL, COBIT, and/or PCI-DSS standards',
                    'Familiarity with local and regional regulatory requirements and how they impact IT policies (prior experience will be an advantage)',
                ],
                'job_desks' => [
                    'Strong communication and interpersonal skill',
                    'Analytical thinking and problem solving',
                    'Detail oriented',
                    'Understanding of system flow and database structure',
                    'Diploma or bachelor’s degree in any major',
                    'Experience in similar or related fields for minimum of 3 years',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia - Jakarta',
                'company' => 'Universitas Pelita Harapan',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.linkedin.com/jobs/search/?currentJobId=3373655059&keywords=junior%20%20business%20analyst&refresh=true',
                'pictureId' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLGqHvaMQt-_DWkcDD5fjrh883m2YjVITM97HQsp9O_pbrLnALFcqNN2g55FC6cOX6Djo&usqp=CAU',
            ],

            [
                'title' => 'Business Analyst',
                'description' => 'Established in 1955, Kawan Lama Group is a multi-sector group of companies who are constantly innovating for improving the quality of lives. Manages 28 brand portfolios operating in six different sectors: Commercial & Industrial, Consumer Retail, Food & Beverages, Property & Hospitality, Manufacturing & Engineering, and Commercial Technology. Aiming to be more than family business - but beyond that, we are business for families, we carry the mission to bring values for betterment of lives through business development and continuous growth.',
                'requirements' => [
                    'Mengolah dan menganalisa data terkait seluruh pencapaian performa bisnis (termasuk store F&B) dan aktivitas marketing untuk memastikan seluruh data terintegrasi dan dapat memberikan informasi yang berguna kepada atasan',
                    'Membuat laporan data store (seperti MPP, sales report, incentive, data AM, QSC, efekifitas promo, performance big order dll) sebagai acuan untuk atasan menetapkan langkah strategis pencapaian business unit.',
                    'Memfasilitasi data dan materi presentasi untuk kebutuhan Direktur (operation & business unit) dalam strategi peningkatan performance business unit.',
                    'Memonitor pencapaian hasil kerja store operation dan efektifitas promo secara rutin berdasarkan indikator kinerja yang sudah ditetapkan sehingga dapat terkelola dengan optimal.',
                    'Memberikan usulan perbaikan / rekomendasi berdasarkan hasil analisa data dan regulasi yang berlaku untuk peningkatan performance yang lebih baik.',
                ],
                'job_desks' => [
                    'Pendidikan minimal S1 segala jurusan',
                    'Pengalaman sebagai Data Analyst minimal 2 tahun',
                    'Memiliki kemampuan mengolah data sampai dengan pembuatan laporan dengan Excel, SQL',
                    'Bersedia untuk penempatan di kantor pusat kami Kembangan, Jakarta Barat',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Jakarta Barat',
                'company' => 'Kawan Lama Group',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.linkedin.com/jobs/search/?currentJobId=3385902585&keywords=junior%20%20business%20analyst&refresh=true',
                'pictureId' => 'https://www.kawanlamagroup.com/storage/465/KLS_Logo.png',
            ],

            [
                'title' => 'Unity Software Engineer',
                'description' => 'NFI is a platform that makes it possible for every designer and creator to create Non-Fungible Items powered by blockchain technology. Non-Fungible Items are 3D NFT items that can be integrated an individual\'s life in social media and extended reality. NFI takes NFT beyond 2D.',
                'requirements' => [
                    'BS/MS degree in Computer Science, Engineering or a related subject',
                    'Professional Unity Experience (i.e. shipped a game/app/etc.)',
                    'A good understanding of the realtime CG pipeline',
                    'Solid Linear Algebra skills',
                    'Experience in creating an AR/VR project is a plus',
                    'Talented technical artist (please share us some reference)',
                    'Spark AR/Snap Lens Studio experience',
                    'Direct experience on a high growth consumer product',
                    'Strong communication and collaboration skills, experience in working across different departments',
                    'Excellent communicator with a high proficiency in English',
                ],
                'job_desks' => [
                    'Creating Unity Editor tools for artists and/or developing features',
                    'You will be given large scope and leeway to work on what you find most important and most interesting',
                    'Making architectural and technology adoption decisions and pushing out a lot of code',
                    'Frequently interact with artists/users directly in the community (via Discord/Twitter) to understand problems and decide how best to solve them',
                    'Diving deep into things like rendering, rigging, AR/VR SDKs, face/body tracking SDKs, camera/video APIs, backend integration, builds, optimization, Web3, React Native<>Unity, and many other related tasks',
                    'If you enjoy learning, getting your hands dirty in a bunch of different areas, and working closely with the founder - this is the perfect role for you',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'NFI',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.linkedin.com/jobs/search/?currentJobId=3373642481&geoId=102478259&keywords=data%20engineer&location=Indonesia&refresh=true',
                'pictureId' => 'https://media-exp1.licdn.com/dms/image/C560BAQHRgJB3Z8X1nA/company-logo_200_200/0/1658569320546?e=2147483647&v=beta&t=C8RdfhxrzMv1oqN8wpoz5a-6P4GtGclr-hGhLOyO5SI',
            ],

            [
                'title' => 'Human Resources Business Partner Senior Manager',
                'description' => 'The Company was established in 1987 and is engaging businesses in a consumer food service industry, particularly pizza and pasta in Indonesia through the franchise owned by the Company. After developed the Pizza Hut brand in Indonesia for two decades, the Company was acquired by Sriboga Group in 2004, and since the acquisition, the growth of the Company’s outlets was rapidly increase. The Company has been supported by Sriboga Group with various support and guidance from SRR or other company in Sriboga group. Based on the Euromonitor\'s Report, in 2016 the Company was the largest pizza chain and, with a market share of 86.6%, with PHR holding a 97.0% market share and PHD holding a 64.6% market share. As of December 31, 2017, the Company operated PHR 317 outlets and 286 PHD outlets located in 28 provinces in Indonesia. In addition on February 2018, the Company owns 586 combined PHR and PHD outlets. The Company\'s restaurants and outlets offer a wide range of high quality pizza and complementary menus to its customers.',
                'requirements' => [
                    'Min Bachelor degree in Human Resources Management',
                    'Has experience as Human Resources Management at food and Beverage company for minimum 5 years will be preffered.',
                    'Excellent Analytical Thinking, building relationship and communication skill',
                    'Highly organized, Good people skill and goal oriented',
                    'Thorough knowledge of labor legislation',
                    'Full understanding of all HR functions and best practices',
                ],
                'job_desks' => [
                    'Provides guidance and input on business unit restructures, workforce planning, and succession planning to ensure right talent is in place for the organization.',
                    'Provide HR policy guidance and interpretation to employee',
                    'Participate in special human resource projects as business dictates',
                    'Work closely with management and employees to improve working relationships, build morale, increase productivity and enhance relation',
                    'In partnership with other labour/ employee relations experts as appropriate, (internal or external Legal and/or HR), manage and resolve both complex day-to-day employee relations issues.',
                    'Provides both strategic and day to day performance management guidance to line management; engages, as appropriate, in similar conversations with individual employees, inclusive of coaching, counselling, career development, and disciplinary conversations',
                    'Coach, support, mentor and challenge managers in the application of HR policies and practices, provide advice and guidance on complex HR issues in order to minimize risk and financial exposure',
                    'Actively manage employee services like on boarding, off boarding, employee communication, employee leave and other benefits utilization.',
                    'Perform other duties as assigned',
                ],
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Jakarta Selatan',
                'company' => 'Pizza Hut Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://talent.usedeall.com/job-detail/638455e289b9750012ef5f77?source=homepage',
                'pictureId' => 'https://edwinghofamz.files.wordpress.com/2011/12/pizzahut.png',
            ],

            [
                'title' => 'Business Development',
                'description' => 'Marselus Steel is a steel distributor and stockiest based in Jakarta, Indonesia, supplying regional markets to both retail and project business. We provide a wide range of steel products for diversified industries including construction, automotive, furniture, and oil & gas. Our Products : Hot Rolled Coil, Cold Rolled Coil, I Wide Flange, H Beam, Angle Bars, U Channel Bars, Deformed Bars, Plain Bars, Shafting Bars, Black Steel Pipe, Seamless Pipe, and Pipe Accessories (Fitting, Flange, and Valve Accessories). Our Brands : Krakatau Steel, Krakatau Posco, Gunung Garuda, Ispatindo, Karawang Prima, Spindo, ISTW.',
                'requirements' => [
                    'Possess a Bachelor’s Degree from any reputable universities.',
                    'Prior experience and knowledge in similar industry will be advantageous.',
                    'Be energetic, positive, outgoing, proactive, creative, and have attention to detail with great selling and networking skills.',
                    'Must be comfortable with negotiations as well as maintaining relationships with clients and internal team',
                    'Always looking for new ways to convert leads, meetings and clients',
                    'Able to communicate effectively in Bahasa and English (oral and written)',
                ],
                'job_desks' => [
                    'Research potential clients and follow them up.',
                    'Initiate new initiatives or new business plan ideas to drive revenue.',
                    'Mediate and attend meetings; reporting back details of discussions involved in the whole sales cycle from pre-sales, sales, to onboarding for new clients.',
                    'Prepare presentations and pitching to potential clients to make the deal.',
                    'Manage operational tasks related to clients request and internal needs.',
                    'End to end responsibility for clients performance growth and assist clients in solving problems they face in their customer journey.',
                    'Analyze current company’s operation procedures, creating necessary measures for improvement.',
                    'Assisting the company to fit into the current dynamic economy by identifying and implementing relevant methods for increased business efficiency',
                ],
                'job_category' => 'Full Time',
                'salary' => 'Rp5.500.000,00 – Rp8.500.000,00',
                'location' => 'Jakarta Utara',
                'company' => 'Marselus Steel',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://talent.usedeall.com/job-detail/63299d736e795b0013cd8f27',
                'pictureId' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMm5_NAHLuTyZuxqIyG4tLSLDgHgwQWGdyeCG2b-MJxmMeoBBz',
            ],

            [
                'title' => 'API Engineer',
                'description' => 'Yummy Corp provides delicious, fresh, and creative food solutions for everyday corporate and group needs. We give a new spin on food facility management and our signature MICE catering, delivering you a noteworthy experience while helping corporates manage costs.
                We are an affiliate of Ismaya Group, the leading brand in the Lifestyle Food & Beverage company with more than 70 outlets operating across Indonesia, Singapore, Shanghai, and Dubai. With more than 15 years of culinary experience, our company truly understands the art of creating affordable high quality food.',
                'requirements' => [
                    'Candidate must possess at least Bachelors Degree in Information Systems/Informatics Engineering or equivalent from reputable university',
                    'At least 2 Year(s) of working experience in the related position',
                    'Good knowledge of programming languages: JavaScript, Node JS, TypeScript',
                    'Good knowledge of database software: SQL (MySQL, Postgres) & NoSQL (Redis, MongoDB, DynamoDB)',
                    'Good knowledge of API: Restful & GraphQL',
                    'Good knowledge of Cloud Service: AWS & GCP',
                    'Familiar with agile scrum',
                    'Familiar with microservice architecture',
                    'Able to bug troubleshooting & provide solution(s)',
                ],
                'job_desks' => [
                    'Design and create an API in accordance with predetermined requirements',
                    'Contribute to all cycles of the API development cycle',
                    'Perform troubleshooting, identify system/process problems, and conduct impact analysis before re-engineering',
                    'Perform maintenance efficiently and periodically',
                    'Actively learn and adopt the technology and tools needed by the team',
                    'Push new features and bug fixes to improve and expand NestJS system and Database',
                    'Follow team process, provide consistent feature flow to production',
                    'Make an impact on one or more subsystems or team pods',
                    'Create documentation for data flow',
                ],
                'job_category' => 'Full Time',
                'salary' => 'Rp10.000.000,00 – 20.000.000,00',
                'location' => 'Tangerang, Indonesia',
                'company' => 'Yummy Corp',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://talent.usedeall.com/job-detail/63806d5f692673001440653d?source=homepage',
                'pictureId' => 'https://scontent.fsrg6-1.fna.fbcdn.net/v/t1.6435-9/145877939_871293263665543_9088525252927659425_n.png?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEpQDTE5J8CngK7PyKa6NuFYhVFdBeN5JhiFUV0F43kmJ2Dfq-49kvuoQPtVevFVgmkMq8LzWzsUVSeFzskSK7-&_nc_ohc=_hQvv4GVHrIAX-lhjFj&_nc_ht=scontent.fsrg6-1.fna&oh=00_AfD6xW0QXXxc3FLtpMgmzwGuzy-e9RVqolpnpGOGDicnCA&oe=63BCF84C',
            ],

        ];

        foreach ($data as $row) {
            $pictureUrl = $row['pictureId'];
            unset($row['pictureId']);
            $job = JobVacancy::create($row);
            $job->addMediaFromUrl($pictureUrl)->toMediaCollection('company_logo');
        }

    }
}
