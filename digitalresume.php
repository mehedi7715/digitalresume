<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AL Mehedi Hasan - European CV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* European Style CV Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
            padding: 0;
            margin: 0;
        }
        
        .cv-container {
            max-width: 210mm; /* Standard A4 width */
            min-height: 297mm; /* Standard A4 height */
            margin: 20px auto;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        
        /* Header Styles */
        .header {
            background: #2c3e50;
            color: white;
            padding: 30px 40px;
            display: flex;
            align-items: center;
        }
        
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #34495e;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 50px;
            margin-right: 30px;
            border: 3px solid #ecf0f1;
        }
        
        .header-content h1 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .header-content h2 {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 10px;
            color: #ecf0f1;
        }
        
        .objective {
            font-style: italic;
            max-width: 600px;
            font-size: 15px;
        }
        
        /* Main Content */
        .main-content {
            display: flex;
            flex: 1;
        }
        
        /* Left Column */
        .left-column {
            width: 35%;
            background: #34495e;
            color: white;
            padding: 30px;
        }
        
        .section {
            margin-bottom: 30px;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #3498db;
            color: #ecf0f1;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        
        .contact-item i {
            margin-right: 12px;
            color: #3498db;
            font-size: 16px;
            width: 20px;
        }
        
        .skill-category {
            margin-bottom: 20px;
        }
        
        .skill-category h4 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #ecf0f1;
        }
        
        .skill-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .skill-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 12px;
            border-radius: 3px;
            font-size: 13px;
        }
        
        /* Right Column */
        .right-column {
            width: 65%;
            padding: 30px;
        }
        
        .right-column .section-title {
            color: #2c3e50;
            border-bottom-color: #2c3e50;
        }
        
        .experience-item {
            margin-bottom: 25px;
        }
        
        .company {
            font-weight: bold;
            color: #2c3e50;
            font-size: 17px;
        }
        
        .role {
            font-weight: 600;
            color: #3498db;
            margin: 5px 0;
            font-size: 15px;
        }
        
        .duration {
            color: #7f8c8d;
            font-style: italic;
            margin-bottom: 10px;
            font-size: 14px;
        }
        
        .responsibilities {
            list-style-type: none;
        }
        
        .responsibilities li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            font-size: 14px;
        }
        
        .responsibilities li:before {
            content: "•";
            color: #3498db;
            font-weight: bold;
            position: absolute;
            left: 0;
        }       
        
        .education-item {
            margin-bottom: 20px;
        }
        
        .institute {
            font-weight: bold;
            color: #2c3e50;
            font-size: 15px;
        }
        
        .degree {
            color: #34495e;
            margin: 5px 0;
            font-size: 14px;
        }
        
        .project-item {
            margin-bottom: 20px;
        }
        
        .project-title {
            font-weight: bold;
            color: #2c3e50;
            font-size: 15px;
        }

        .project-functionality .project-module {
            color: #2c3e50;
            font-size: 15px;
        }

        .project-functinality-list {
            list-style-type: none;
        }
        
        .project-functinality-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
            font-size: 14px;
        }

        .project-functinality-list li:before {
            content: "•";
            color: #3498db;
            font-weight: bold;
            position: absolute;
            left: 0;
        } 
        
        .tech-used {
            margin: 8px 0;
            font-style: italic;
            font-size: 14px;
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background: #2c3e50;
            color: white;
            font-size: 13px;
        }
        
        /* Print Styles */
        @media print {
            body {
                background: white;
            }
            
            .cv-container {
                box-shadow: none;
                margin: 0;
                max-width: 100%;
            }
            
            .no-print {
                display: none;
            }
        }
        
        /* Action Buttons */
        .action-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }
        
        .action-btn {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            transition: background 0.3s;
        }
        
        .action-btn:hover {
            background: #3498db;
        }
    </style>
</head>
<body>
    <div class="cv-container">
        <header class="header">
            <div class="profile-img">
                <img src="mehedi.jpeg" alt="Mehedi" style="width:150px;height:150px;" >
            </div>
            <div class="header-content">
                <h1>AL Mehedi Hasan</h1>
                <h2>Web Developer & Application Support Lead</h2>
                <p class="objective">Seeking an opportunity to deliver value in a growth-focused environment where my skills can make measurable contributions to organizational success.</p>
            </div>
        </header>
        
        <div class="main-content">
            <div class="left-column">
                <div class="section">
                    <h3 class="section-title">CONTACT</h3>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>mehedi7715drmc@gmail.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+601128734495</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Antilla Lagoon Villas, Kota Kemuning, 40460 Shah Alam, Selangor</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-linkedin"></i>
                        <span>linkedin.com/in/mehedi7715/</span>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">SKILLS</h3>
                    <div class="skill-category">
                        <h4>Professional Skills</h4>
                        <div class="skill-list">
                            <div class="skill-item">HTML/PHP</div>
                            <div class="skill-item">JavaScript/jQuery</div>
                            <div class="skill-item">CMS</div>
                            <div class="skill-item">Bootstrap</div>
                            <div class="skill-item">Laravel</div>
                            <div class="skill-item">MySQL</div>
                            <div class="skill-item">Power BI</div>
                        </div>
                    </div>
                    
                    <div class="skill-category">
                        <h4>Language Skills</h4>
                        <div class="skill-list">
                            <div class="skill-item">Bangla</div>
                            <div class="skill-item">English</div>
                            <div class="skill-item">Hindi</div>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">SOFTWARE</h3>
                    <div class="skill-list">
                        <div class="skill-item">SQL Accounting</div>
                        <div class="skill-item">WMS System</div>
                        <div class="skill-item">Head Quater Retail Management System</div>
                        <div class="skill-item">Retail POS System</div>
                        <div class="skill-item">F&B Inventory Management & POS System</div>
                    </div>
                </div>
            </div>
            
            <div class="right-column">
                <div class="section">
                    <h3 class="section-title">PROFESSIONAL EXPERIENCE</h3>
                    
                    <div class="experience-item">
                        <div class="company">Mercu Cita Manufacturing SDN BHD, MALAYSIA</div>
                        <div class="role">Web Developer & Application Support Lead</div>
                        <div class="duration">June 2020 - Present</div>
                        <ul class="responsibilities">
                            <li>Managed and maintained the business website, including feature updates, performance optimization, and regular maintenance.</li>
                            <li>Troubleshot and resolved front-end issues related to CSS and JavaScript to ensure seamless functionality and user experience.</li>
                            <li>Managed and provided Level 2 (L2) support for retail inventory systems and Point-of-Sale (POS) systems.</li>
                            <li>Delivered L2 support for Warehouse Management Systems (WMS), ensuring smooth operations and troubleshooting issues.</li>
                            <li>Analyzed business performance data to address stakeholder inquiries, identify inefficiencies, and recommend data-driven strategies for improving productivity and operational effectiveness.</li>
                            <li>Developed SQL queries to enhance functionality across various inventory system modules, improving efficiency for end-users.</li>
                            <li>Conducted training sessions for new users on POS, inventory, and WMS systems to ensure seamless adoption.</li>
                            <li>Designed comprehensive Data Flow Diagrams (DFD) and workflows for Warehouse Management Systems (WMS) to optimize processes and system efficiency.</li>
                            <li>Developed Standard Operating Procedures (SOPs) for end-users, ensuring clarity and consistency in system operations.</li>
                            <li>Developed a robust inventory management system using object-oriented PHP, AJAX, JavaScript, and MySQL</li>
                            <li>Skilled in OOP/MVC with Laravel for efficient web development.</li>
                            <li>Designed and developed RESTful APIs using Laravel framework.</li>
                            <li>A strategic problem-solver with strong analytical and decision-making skills.</li>
                        </ul>
                    </div>
                    
                    <div class="experience-item">
                        <div class="company">Guess Global SDN BHD, MALAYSIA</div>
                        <div class="role">Web Developer & Inventory | POS System Admin</div>
                        <div class="duration">May 2018 - July 2020</div>
                        <ul class="responsibilities">
                            <li>Interpreted business requirements and technical specification documents</li>
                            <li>Performed coding to written technical specifications</li>
                            <li>Performed code maintenance and testing</li>
                            <li>Fixed application issues and code irregularities</li>
                            <li>To give technical feedback to the Application Architect.</li>
                            <li>Correspond with and report to Application Architect.Building and maintenance of core PHP based applications.</li>
                            <li>To develop web page infrastructure and application related to pages with more advanced graphics and features.</li>
                            <li>To design and develop relational database systems and their web interfaces.</li>
                            <li>Responsible for integrating MySQL database with the PHP applications.</li>
                        </ul>
                    </div>
                    
                	<div class="experience-item">
                        <div class="company">EUITSOLS, BANGLADESH</div>
                        <div class="role">Web Developer</div>
                        <div class="duration">January 2017 - April 2018</div>
                        <ul class="responsibilities">
                            <li>Designed and developed commercial websites in WordPress.</li>
                            <li>Worked closely with clients to establish problem specifications and system designs on a contract basis.</li>
                            <li>Maintained schedules and assured on time delivery of contents.</li>
                        </ul>
                    </div>
                

                	<div class="experience-item">
                        <div class="company">SERVO IT, BANGLADESH</div>
                        <div class="role">TELE MARKETING EXECUTIVE</div>
                        <div class="duration">January 2016 - December 2016</div>
                        <ul class="responsibilities">
                            <li>Communicated respectfully and politely with potential business customers for our IT products and services.</li>
                            <li>Communicated respectfully and politely with potential business customers for our IT products and services.</li>
                            <li>Trained other telemarketers when required.</li>
                        </ul>
                    </div>

                </div>
   
                <div class="section">
                    <h3 class="section-title">EDUCATION</h3>
                    <div class="education-item">
                        <div class="institute">Lovely Professional University, Punjab, India</div>
                        <div class="degree">Bachelor of Technology & Master of Technology (Dual degree) in Computer Science & Engineering</div>
                        <div class="duration">2010 - 2015 | CGPA: 5.88/10</div>
                    </div>
                    <div class="education-item">
                        <div class="institute">Dhaka Residential Model College, Dhaka, Bangladesh</div>
                        <div class="degree">S.S.C, Science in 2007 & H.S.C, Science in 2009</div>
                        <div class="duration">CGPA: 5.00/5.00</div>
                    </div>
                </div>
                
                <div class="section">
                    <h3 class="section-title">PROJECT</h3>
                    <div class="project-item">
                        <div class="project-title">Inventory Management System, 2023</div>
                        <div class="tech-used"><b>Technology Used:</b> PHP Laravel and Bootstrap Admin Template</div>
                        <div class="project-module"><b>Project Modules:</b> User dashboard, Inventory dashboard, Product dashboard, Ordering dashboard, Table Reference and Report module.</div>
                        <div class="project-functionality"><b>Project Functionality:</b>
                        	<ul class="project-functinality-list">
                        		<li>Fully authenticated user access.</li>
                        		<li>Used validation function in each module.</li>
                        		<li>Used auto added functionalities with ajax and JavaScript.</li>
                        		<li>CRUD and modal functionalities have been used.</li>
                        		<li>The resource Helper method is used in route.</li>
                        		<li>Used Auto generated rows method in ordering module using JavaScript.</li>
                        	</ul>
                        </div>
                    </div>
                </div>                

            </div>

        </div>
        
        <footer>
            <p>© 2025 AL Mehedi Hasan - Curriculum Vitae</p>
        </footer>

    </div>

    </div>

    <div class="action-buttons no-print">
        <button class="action-btn" onclick="window.print()">
            <i class="fas fa-print"></i> Print CV
        </button>
        <button class="action-btn" onclick="downloadCV()">
            <i class="fas fa-download"></i> Download PDF
        </button>
    </div>

    <script>
        function downloadCV() {
            alert("To download as PDF, please use the print dialog and select 'Save as PDF'");
        }
        
        // Add last updated date
        document.addEventListener('DOMContentLoaded', function() {
            const lastUpdated = document.createElement('p');
            lastUpdated.textContent = 'Last updated: ' + new Date().toLocaleDateString();
            lastUpdated.style.fontSize = '12px';
            lastUpdated.style.marginTop = '5px';
            document.querySelector('footer').appendChild(lastUpdated);
        });
    </script>
</body>
</html>