<?php

namespace Database\Seeders;

use App\Models\JobVacancy;
use Illuminate\Database\Seeder;

class JobVacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Application Development Analyst - SAP Basis',
                'description' => 'Accenture is a global professional services company with leading capabilities in digital, cloud and security. Combining unmatched experience and specialized skills across more than 40 industries, we offer Strategy and Consulting, Interactive, Technology and Operations services—all powered by the world’s largest network of Advanced Technology and Intelligent Operations centres. Our 506,000 people deliver on the promise of technology and human ingenuity every day, serving clients in more than 120 countries. We embrace the power of change to create value and shared success for our clients, people, shareholders, partners and communities. Visit us at www.accenture.com.',
                'requirements' => json_encode([
                    'Bachelor\'s Degree in Information Technology,
                    Computer Science,
                    Business or other relevant fields
                    Minimum of 5 years of experience in SAP Basis
                    You will also have opportunities to hone your functional skills and expertise in an area of specialization.  We offer a variety of formal and informal training programs at every level to help you acquire and build specialized skills faster. Learning takes place both on the job and through formal training conducted online, in the classroom, or in collaboration with teammates. The sheer variety of work we do, and the experience it offers, provide an unbeatable platform from which to build a career.
                    Accenture is an equal opportunities employer and welcomes applications from all sections of society and does not discriminate on grounds of race, religion or belief, ethnic or national origin, disability, age, citizenship, marital, domestic or civil partnership status, sexual orientation, gender identity, or any other basis as protected by applicable law.
                    ',
                ]),
                'job_desks' => json_encode([
                    'Work on Application Support on the following areas:
                    SAP Performance Monitoring
                    SAP Performance Tuning
                    Solution Manager configuration and utilization
                    SAP Transport Management
                    SAP System Client copy, refresh, license management
                    Security parameter management
                    Configuration of SAP Routers
                    SAP Traces and logs
                    Workload balancing
                    SAP Correction
                    SAP Job maintenance
                    SAP Backup
                    SAP Data administration
                    SA Kernel maintenance
                    SAP Patch management
                    • Manage end to end resolution of Major Incident (Priority 1 and 2) and determine Root Cause
                    • Closely collaborate with client’s 3rd party vendors supporting Infra and other systems connecting to SAP',

                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'Accenture',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.jobstreet.co.id/en/job/application-development-analyst-sap-basis-4000000-4000000-20210610090000?fr=21'
            ],


            [
                'title' => 'Salesman',
                'description' => 'We are finding Salesman right now',
                'requirements' => json_encode([
                    'Pendidikan minimal Diploma (D3)
                    Memiliki kemampuan dalam pemasaran dan penjualan
                    Dapat mengendarai motor (memiliki SIM C)
                    Penempatan di cabang Semarang
                    ',
                ]),
                'job_desks' => json_encode([
                    'Work as a sales man',

                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => "Semarang, Central Java, Indonesia",
                'company' => "PT . TRI SAPTA JAYA(KALBE GROUP)",
                'created_at' => now(),
                'updated_at' => now(),
                'link' => "https://www.hiredtoday.com/en/jobs-detail/salesman-semarang-kedungmundu?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral",
            ],


            [
                'title' => 'HR Admin',
                'description' => 'Ninja Van is a tech - enabled logistics company on a mission to provide hassle - free delivery services for businesses of all sizes across Southeast Asia . Launched in 2014, we started operations in Singapore and have become the region\'s largest and fastest growing last-mile logistics company, partnering with over 35,000 merchants and delivering more than 1,000 parcels every minute across six countries.',
                'requirements' => json_encode([
                    'Minimal 1 year experience as an HR Administrator, HR Administrative Assistant or relevant role
                    Computer literacy (MS Office applications, in particular)
                    Excellent organizational skills, with an ability to prioritize important projects
                    Meticulous, and detail oriented',
                ]),
                'job_desks' => json_encode([
                    'Organize and maintain personnel records
                    Update internal databases
                    Prepare HR documents, like employment contracts and new hire guides
                    Assist payroll department by providing relevant employee information',

                ]),
                'job_category' => 'Contract',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. TRI SAPTA JAYA(KALBE GROUP)',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://jobs.lever.co/ninjavan/e7aeb643-06af-45ba-aa5a-e78fba52e6c5',
            ],


            [
                'title' => 'Staff Admin',
                'description' => 'Company Description: PT Kontak Perkasa Futures (“KPF”) adalah perusahaan pialang berjangka terpercaya yang berdiri sejak tahun 2000. Dengan dukungan 7 kantor operasional yang tersebar di Jakarta, Bandung, Surabaya, Yogyakarta, Semarang, Makassar dan Bali. Anggota dari PT Bursa Berjangka Jakarta dan PT Kliring Berjangka (Persero) Indonesia, PT Kontak Perkasa Futures merupakan pialang berjangka resmi yang terdaftar dan diawasi oleh Badan Pengawas Perdagangan Berjangka Komoditi (BAPPEBTI).',
                'requirements' => json_encode([
                    'Wanita, S1/D3 segala jurusan
                    Menguasai komputer (M.S Office)
                    Warga Negara Indonesia (WNI)
                    Memiliki Identitas KTP
                    Memiliki ketelitian yang tinggi dan displin dalam bekerja',
                ]),
                'job_desks' => json_encode([
                    'Staff Admin
                    Melakukan pengolahan data secara akurat
                    Melayani, mengolah dan memeriksa reporting yang dikirimkan kepada customer
                    Mencari informasi data reporting
                    Memasukan data dan informasi ke dalam database perusahaan',

                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. KONTAK PERKASA FUTURES SEMARANG',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hiredtoday.com/en/jobs-detail/staff-admin-wonotingal-aa45820e-a353-4e2a-86fc-d29ef4764053?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral',
            ],

            [
                'title' => 'Admin Akuntansi Internship',
                'description' => 'PT. SEPUTRA ADIAJI NUGROHO was established in 1993 and continues to work in various sectors supported by experienced and competent experts and resources. During the establishment, PT. SEPUTRA ADIAJI NUGROHO has successfully completed the work by prioritizing quality and customer satisfaction while continued to prioritize occupational safety, health and safety.',
                'requirements' => json_encode([
                    'Jurusan akuntansi
                    • Bersedia fulltime
                    • Memiliki laptop pribadi',
                ]),
                'job_desks' => json_encode([
                    'Membantu kegiatan divisi finance',

                ]),
                'job_category' => 'Internship',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang, Central Java, Indonesia',
                'company' => 'PT. SEPUTRA ADIAJI NUGROHO',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.hiredtoday.com/en/jobs-detail/admin-akuntansi-internship-ngesrep?SiteID=int_id_linkedin&utm_source=linkedin&utm_medium=referral',
            ],

            [
                'title' => 'Application Development Analyst',
                'description' => 'We are looking for an Application Development Analyst to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => json_encode([
                    'Bachelors Degree in Information Technology, Computer Science or other relevant fields.',
                    'Open for fresh graduates with/without work experience.',
                    'Hands-on knowledge of front end development technologies such as JavaScript, HTML, CSS, SASS, AJAX and JSON',
                    'Experience with one or more JavaScript libraries and/or frameworks such as ReactJS, Node.js, Ember, AngularJS, Backbone etc.',
                    'Willing to work in semarang'
                ]),
                'job_desks' => json_encode([
                    'Working as part of a team to design and implement enterprise level dynamic web applications such as media portals, content management systems, e-commerce sites or banking portals',
                    'Translation of User Stories into source code on various technical platforms and within waterfall or agile delivery environments',
                    'Integration of established 3rd party services such as video content management solutions, Cloud infrastructure service web analytics or commercial transaction service providers',
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Semarang',
                'company' => 'Accenture',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.accenture.com/id-en/careers/jobdetails?id=R00136458_en&src=LINKEDINJP',
            ],


            [
                'title' => 'Mobile Frontend Developer',
                'description' => 'We are looking for a Mobile Frontend Developer to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => json_encode([
                    'B.S. in Computer Science, Information Systems or equivalent',
                    'Minimum 3 year’s experience in mobile application development & environment',
                    'HanAt least 3 years hands on knowledge & experience in the following: Git, Restful API, Mobile App Development Frameworks',
                    'Deep understanding of developing UI components that can be used and accessed across the whole mobile',
                    'Very good understanding of source code management for cross platform development using industry best practices for frontend and mobile applications
Detail-oriented with eyes sensitive to the aesthetics of UI',
                    'Self-starter & team player',
                    'Analytical & good problem solving skills',
                    'Good verbal, written and interpersonal skills'
                ]),
                'job_desks' => json_encode([
                    'Scope, design and deliver pixel-perfect mobile applications based on wireframes and design requirements in collaboration with back end developers to create a comprehensive digital solution that meets the customer’s business',
                    'Optimize mobile applications for maximum speed',
                    'Architect and implement mobile UI/UX based on provided wireframes and business',
                    'Gather, document and analyze business requirements in order to help define scope of software development May include mobile mock-ups and interaction prototyping.',
                    'Produce and maintain technical documentation related to front-end modules (e.q. scope requirements, logical and technical designs, testing and implementation plans).',
                    'Troubleshoot and implement bug fixes related to client and user reported',
                    'Play proactive support role and take ownership of technical issues, and work with internal/ cross functional/ external team to resolve more advanced issues when',
                    'Collaborate with team members in all aspect of software design, coding, testing, documentation & deployment',
                    'Deliverables in agile scrum approach'
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'Beyondsoft',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://beyondsoft.recruiterpal.com/career/jobs/6nbql',
            ],


            [
                'title' => 'Junior Business Analyst',
                'description' => 'BCA terus bertumbuh dengan puluhan ribu karyawan yang tersebar di berbagai kantor BCA di seluruh Indonesia. Berbagai penghargaan di bidang pengelolaan sumber daya manusia juga diraih oleh BCA, seperti Gallup Great Workplace 2019, Indonesia Human Capital Award (IHCA) 2021, HR Asia Award 2021 dan lainnya. Hal ini menjadi bukti nyata bahwa kami selalu berupaya menciptakan lingkungan kerja yang menyenangkan serta senantiasa memberikan ruang bagi para karyawan untuk dapat terus tumbuh dan berkembang.',
                'requirements' => json_encode([
                    'S1 graduates from all majors in Engineering, Computer, Mathematics, Statistics, and Economics',
                    'Have interest in System or Product Development',
                    'Placement at Head Office (Jakarta)',
                    'Willing not to marry for 1 (one) year of education',
                    'Willing to undergo official bond after education',
                ]),
                'job_desks' => json_encode([
                    'Exploring the needs of work units to obtain appropriate alternative solutions to assisting work units in the development process, designing policies, procedures and user requirements as needed.',
                    'Identifies gaps and provides technical expertise in business requirements for system functional specifications and scales new and current systems, processes and procedures in a cost effective manner.',
                    'Configures system settings and options; plans and executes unit, integration and acceptance testing to meet business requirements. Designs details of automated systems.',
                    'May provide consultation to users in the area of automated systems. May lead cross-functional linked teams to address business or systems issues.',
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'BCA',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://karir.bca.co.id/job-fair/junior-business-analyst-okt-nov?utm_source=social%20organic&utm_medium=linkedin&utm_campaign=sac_bca-dtb-adm_all%20product_info-organic_social%20organic_nov_cps_linkedin|22110101912&utm_content=bankbca-linkedin-job%20posting',
            ],

            [
                'title' => 'Data Scientist',
                'description' => 'We are looking for a Junior Business Analyst to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => json_encode([
                    'Minimum bachelor in statistics or mathematics or equivalent field related to science, engineering, energy, and economy',
                    'Experience using SQL, and statistical modelling and machine learning techniques',
                    'Experience in writing about renewable energy, science, energy monitoring, and follow the latest trends about energy',
                    'Experience in trends/forecasting analysis with data analytical',
                    'Have a good attitude, strong communicator, and fast learner',
                ]),
                'job_desks' => json_encode([
                    'We are an advisory, database and project management for renewable energy and telco sector',

                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'PT CHAKRA GIRI ENERGI INDONESIA',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://glints.com/id/opportunities/jobs/data-scientist/ff57c931-ad7d-47dd-b25d-94e7df4c3fef',
            ],

            [
                'title' => 'Devops Engineer',
                'description' => 'PT. Nusantara Sejahtera Raya (Cinema XXI - The Premiere - Cinema 21) is the largest cinema chain in Indonesia. Currently, we had more than 150 cinemas in Indonesia with +700 screens and still expanding our business. Why join us? As market leader in cinema industry, our company is a great place to push your career to the next level with a culture built on collaboration and innovation. This is an organization where you are surrounded by smart and forward-thinking people. This is a chance to work',
                'requirements' => json_encode([
                    'Bachelor’s Degree from reputable university',
                    'Minimum experience 3+ years as DevOps Engineer',
                    'Strong Knowledge in on Containerizing & Clustering, such as Docker, Docker-Swarm, Kubernetes, PCF',
                    'Knowledge on various Cloud Services, such as GCP, AWS etc',
                    'Strong background in programming such as shell scripts, python, PHP, Java',
                    'Can debugging application leaks',
                    'Familiar with CI/CD concepts and tools such as Gitlab-CI, Concourse-CI',
                ]),
                'job_desks' => json_encode([
                    'Design and implement continuous delivery systems for agile development.',
                    'Build automation for internal agile infrastructure process and support continuous enhancement.',
                    'Infrastructure automation in for accelerating Infrastructure SDLC process.',
                    'Collaborate with developers to refine build, test and release practice across the organization',
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia',
                'company' => 'PT. Nusantara Sejahtera Raya (Cinema 21)',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://talent.usedeall.com/job-detail/6371ba9ab562e60013efa3ee?utm_source=ig-feed&utm_medium=post&utm_campaign=promote&utm_content=de-xxi',
            ],

            [
                'title' => 'Business Analyst for Non-Core System',
                'description' => 'Yayasan Pendidikan Pelita Harapan mendirikan Universitas Pelita Harapan pada tahun 1994 untuk mendidik anak bangsa dan memajukan dunia pendidikan Indonesia.
                Universitas Pelita Harapan mempunyai visi dan misi untuk secara terus menerus melakukan transformasi pendidikan secara total.
                Universitas Pelita Harapan bercita-cita untuk memberikan pendidikan yang berkualitas baik baik melalui global best practices, manajemen yang profesional, kemitraan strategis secara global, dan pendekatan yang bersifat people-oriented berdasarkan prinsip - prinsip Kristen. Proses pembelajaran yang khas untuk membangun keterampilan kepemimpinan, pembelajaran dan komunikasi, serta karakter dan sikap, membuat UPH memiliki reputasi yang kuat untuk untuk membentuk pengetahuan, iman dan karakter para mahasiswa.',
                'requirements' => json_encode([
                    'Assess current process flow and determine user requirements',
                    'Propose suitable solution that meet user needs but also technologically feasible (according to system architecture)',
                    'Identify any changes that will impact current process flow',
                    'Write functional requirement design based on user requirements',
                    'Prior experience in implementing ISO 27001, ITIL, COBIT, and/or PCI-DSS standards',
                    'Familiarity with local and regional regulatory requirements and how they impact IT policies (prior experience will be an advantage)',
                ]),
                'job_desks' => json_encode([
                    'Strong communication and interpersonal skill',
                    'Analytical thinking and problem solving',
                    'Detail oriented',
                    'Understanding of system flow and database structure',
                    'Diploma or bachelor’s degree in any major',
                    'Experience in similar or related fields for minimum of 3 years',
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Indonesia - Jakarta',
                'company' => 'Universitas Pelita Harapan',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.linkedin.com/jobs/search/?currentJobId=3373655059&keywords=junior%20%20business%20analyst&refresh=true',
            ],

            [
                'title' => 'BACK END DEVELOPER-NODE JS',
                'description' => 'Creon Teknologi Indonesia is a professional technology company with experience of delivering software consulting and software development services to leading companies across the globe. We specialise in multi-platform custom application development and integration. We help our clients to mobile-enable their employees through enterprise mobile applications. In addition, we develop cutting-edge security design, mobile applications, mobile games, billing and payment solutions that help our enterprise customers to successfully communicate with and interact with their consumers.Our offices are based in West Jakarta, Indonesia.',
                'requirements' => json_encode([
                    'Minimum 3 years of working experience',
                    'Candidate must possess at least Bachelor Degree',
                    'Has the ability to create applications, perform trace errors, fixes with programming language, Node Js, machete',
                    'Having a good knowledge in : Git, Git hooks, unit test frameworks, CI tools like CircleCI, Docker containers, Kubernetes, GitOps, dan monitoring tools Prometheus, log aggregators seperti Elasticsearch & Kibana, provisioning tools sepeeti Ansible, Vagrant, and Terraform.',
                    'It has the ability to design complex database structures and analyze large data in SQL.',
                ]),
                'job_desks' => json_encode([
                    'Responsible for developing all parts of the service system',
                    'Participate in all phases of the development cycle, focusing on coding, testing, and debugging and Conducting research, evaluating and analyzing technical and design requirements',
                    'fix bugs/weaknesses in websites and other systems to ensure the server runs optimally',
                    'interact with the database, ensuring that the written code is safe from any interference (inside & outside)',
                ]),
                'job_category' => 'Full Time',
                'salary' => 'Rp20.000.000,00 - Rp28.000.000,00',
                'location' => 'Jakarta Barat',
                'company' => 'PT Creon Teknologi Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.jobstreet.co.id/id/job-search/backend-jobs/',
            ],

            [
                'title' => 'Business Analyst',
                'description' => 'Chickin aggregates poultry farmer and offer their chickens to businesses while providing IoT that controls the climate, thereby increasing productivity.',
                'requirements' => json_encode([
                    'Bachelor Degree Math/Science (preferred)',
                    'Experience as Personal Analyst min 2 years,',
                    'Ms Office, spreadsheet, advanced excel skills and other tools analysis (ex : Power BI),',
                    'Experience working with senior decision makers,',
                    'Strong communication/interpersonal skills,',
                    'Advanced analytical thinking background.',
                ]),
                'job_desks' => json_encode([
                    'Discussion personal with president for detail business analysis, finding root cause & solve the problem,',
                    'Provide & reporting metrics data based on president needed,',
                    'Take part in president job activities (business trip, meeting, networking, etc)',
                    'Planning, monitoring & follow up progress to president under structure)',
                ]),
                'job_category' => 'Full Time',
                'salary' => '0 - Rp10.000.000,00',
                'location' => 'Solo, Central Java',
                'company' => 'PT SINERGI KETAHANAN PANGAN',
                'created_at' => now(),
                'updated_at' => now(),
                'link' => 'https://www.jobstreet.co.id/id/job-search/backend-jobs/',
            ],

        ];

        JobVacancy::insert($data);
    }
}
