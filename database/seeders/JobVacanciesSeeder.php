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
                    ' Translation of User Stories into source code on various technical platforms and within waterfall or agile delivery environments',
                    'Integration of established 3rd party services such as video content management solutions, Cloud infrastructure service web analytics or commercial transaction service providers',
                ]),
                'job_category' => 'Full Time',
                'salary' => 1000,
                'location' => 'Semarang',
                'company' => 'Accenture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile Frontend Developer - Indonesia - MB',
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
                'salary' => 1000,
                'location' => 'Indonesia',
                'company' => 'Beyondsoft ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Business Analyst',
                'description' => 'We are looking for a Junior Business Analyst to join our team. You will be responsible for the development and maintenance of our software applications. You will also be responsible for the development and maintenance of our software applications.',
                'requirements' => json_encode([
                    'Bachelor’s degree in Computer Science, Information Systems, or related field',
                    '1-3 years of experience in business analysis, software development, or related field',
                    'Experience with Agile development methodologies',
                    'Experience with JIRA, Confluence, and other Atlassian tools',
                    'Experience with SQL and relational databases',
                    'Experience with Microsoft Office Suite',
                    'Experience with Microsoft Visio',
                    'Experience with Microsoft Project',
                    'Experience with Microsoft SharePoint',
                    'Experience with Microsoft Power BI',
                    'Experience with Microsoft Power Apps',
                    'Experience with Microsoft Power Automate',
                    'Experience with Microsoft Power Virtual Agents',
                ]),
                'job_desks' => json_encode([
                    'Work with business stakeholders to understand business requirements and translate them into user stories',

                ]),
                'job_category' => 'Full Time',
                'salary' => 1000,
                'location' => 'Indonesia',
                'company' => 'BCA ',
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];

        JobVacancy::insert($data);
    }
}
