-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2023 at 06:39 AM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabtechs_fabulous`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_app`
--

CREATE TABLE `about_app` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_app`
--

INSERT INTO `about_app` (`id`, `heading`, `sub_heading`, `des`, `img_1`, `img_2`) VALUES
(1, 'Application Development', 'Fabtechsol as an Application Development Company', 'Our Application Development Process Is Designed To Deliver Quality Software That Meets Your Needs. This Process Begins With A Thorough Understanding Of Your Business Needs And Technical Constraints. We Work Closely With Our Customers To Define The Problem Or Need They Want Their Application To Address, Then Develop An Application That Meets Their Specific Goals And Needs. Once The Design Is Complete, Developers Begin The Development Process Of Creating A Robust And Reliable Application Using The Latest Technology And Best Practices. After That Testing Phase Starts To Ensure Our Applications Meet Our Customers\' Expectations. Once Your Application Is Complete, We Provide A Full Deployment And Support Service To Ensure Your Application Is Properly Installed, Configured, And Working As Expected. We Also Offer Ongoing Maintenance And Update Services To Keep Your Application Smoothly Up-To-Date With The Latest Technology And Best Practices.', '../upload/app-about-1.png', '../upload/app-about-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_company`
--

CREATE TABLE `about_company` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_company`
--

INSERT INTO `about_company` (`id`, `heading`, `sub_heading`, `des`, `btn_name`, `btn_link`, `img_1`, `img_2`) VALUES
(1, 'About Company', 'Get a world-class software development partner', 'Our high-velocity, full-stack engineering capabilities result in unparalleled digital experiences. Expertise and deep experience in agile web development and key modern web concepts mean that we can build a custom, enterprise-grade solution to meet every need. We can develop reliable, scalable and secure software solutions for any operating system, browser and device. We combine deep industry expertise and the latest IT advances to deliver custom solutions and products that perfectly match the needs and behaviors of their users.', 'Letâ€™s begin', 'contact-us', '../upload/About-us-00.png', '../upload/About-us-01.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_company_home`
--

CREATE TABLE `about_company_home` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `t_experience` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_company_home`
--

INSERT INTO `about_company_home` (`id`, `heading`, `sub_heading`, `des`, `btn_name`, `btn_link`, `t_experience`, `img`) VALUES
(1, 'About Company', 'Trusted Software Development Company', 'We have been a leading software development company Since 2017 that specializes in providing top-quality software development services to businesses of all sizes. Our team of expert developers and designers are committed to delivering innovative and cutting-edge software solutions that meet the unique needs of our clients. ', 'Letâ€™s Begin', 'contact-us', '6', '../upload/34 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `about_hero`
--

CREATE TABLE `about_hero` (
  `id` int(11) NOT NULL,
  `about_hero_title` varchar(255) NOT NULL,
  `about_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_hero`
--

INSERT INTO `about_hero` (`id`, `about_hero_title`, `about_hero_des`) VALUES
(1, 'About us', 'We are a digital transformation consulting and software development company providing cutting-edge solutions for global organizations and technology startups. Since 2017, we\'ve been helping businesses and established brands reimagine their businesses through digital technology. Our mission is to help businesses accelerate the adoption of new technologies, solve the complex challenges that always arise in the digital evolution, and organize continuous innovation. Whether for consumer-facing applications or innovative enterprise-grade software, the company drives the process from idea and concept to implementation and provides ongoing lifetime support after development.');

-- --------------------------------------------------------

--
-- Table structure for table `about_meta`
--

CREATE TABLE `about_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_meta`
--

INSERT INTO `about_meta` (`id`, `meta_des`) VALUES
(1, 'Fabtechsol digital transformation consulting and software development company providing cutting-edge solutions for global organizations and technology startups.');

-- --------------------------------------------------------

--
-- Table structure for table `about_project`
--

CREATE TABLE `about_project` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_project`
--

INSERT INTO `about_project` (`id`, `heading`, `sub_heading`, `des`, `btn_name`, `btn_link`, `img_1`) VALUES
(1, 'Our Projects', 'We provide the best IT solution services', 'Welcome to our portfolio! Here you will find a selection of our most recent and successful projects. We are proud to showcase our work and the results we have achieved for our clients.\r\n\r\nAt Fabtechsol, we specialize in web application development, software development, mobile application development, ui ux design and website development. Our team of experts is dedicated to providing high-quality solutions that exceed our clients\' expectations. We believe in building strong relationships with our clients and working closely with them to understand their needs and objectives.\r\n\r\nOur portfolio includes projects for a diverse range of clients, from small startups to large corporations. We have helped businesses in various industries, such as [insert some examples, e.g. healthcare, finance, education, etc.], achieve their goals through innovative and effective solutions.\r\n\r\nEach project in our portfolio showcases our creativity, attention to detail, and commitment to delivering exceptional results. We take pride in our work and strive to exceed our clients\' expectations every time.\r\n\r\nWe invite you to take a look at our portfolio and see for yourself the quality of our work. If you have any questions or would like to discuss your project with us, please don\'t hesitate to contact us. We look forward to hearing from you!', 'Discover more', 'https://fabtechsol.com/project#', '../upload/Untitled design (2).png');

-- --------------------------------------------------------

--
-- Table structure for table `about_software`
--

CREATE TABLE `about_software` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_software`
--

INSERT INTO `about_software` (`id`, `heading`, `sub_heading`, `des`, `img_1`, `img_2`) VALUES
(1, 'Software Development', 'Fabtechsol as a Software Development Company', 'Our software development team has a wealth of experience in creating custom software solutions for businesses of all sizes and has worked with variety of projects. Our thorough know-how of the brand new era and enterprise pleasant practices enables us to offer high-quality solutions that meet your specific needs. \r\nWe know fact that every business is unique, and we take the time to fully recognize your requirements and goals before developing a customized solution that meets your specific needs. We offer ongoing support and maintenance to make sure that your software is functioning optimally. Our solutions are designed to scale with your business, so you can develop and expand without worrying about technical limitations. If you are in need of custom software, feel free to contact us. Our experts are ready to help you develop a solution that fits your business perfectly.\r\n', '../upload/software-about-1.png', '../upload/software-about-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_ui`
--

CREATE TABLE `about_ui` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_ui`
--

INSERT INTO `about_ui` (`id`, `heading`, `sub_heading`, `des`, `img_1`, `img_2`) VALUES
(0, 'UI & UX Design', 'Fabtechsol UI And UX Design Service Options', 'We offer a range of web design services to suit your needs. In addition to one-off web design, we also provide continuous design support services, allowing your web solution to evolve over time. By collaborating closely with your team, we implement regular improvements and changes based on user surveys and A/B testing, ensuring that your users enjoy a superior experience on your website.\r\n', '../upload/ui-about-1.png', '../upload/ui-about-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_web`
--

CREATE TABLE `about_web` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_web`
--

INSERT INTO `about_web` (`id`, `heading`, `sub_heading`, `des`, `img_1`, `img_2`) VALUES
(1, 'Website Development', 'Fabtechsol as a Website development Company', 'Website design and development is an integral part of the digital landscape. Every website needs a functional, aesthetically pleasing platform to achieve these features. We understand that any project we work on, big or small, will possess distinctive requirements and be undertaken with a personality all its own. Thatâ€™s why we take pride in our professionalism every step of the way--- listening to you, understanding your objectives so that together we determine the best path for your project. Fabtechsol provides comprehensive web development service to meet our client\'s need from conceptualisation through design and deployment of amazing appearance.', '../upload/web-about-1 (1).png', '../upload/web-about-2 (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'fabtech.123');

-- --------------------------------------------------------

--
-- Table structure for table `app_hero`
--

CREATE TABLE `app_hero` (
  `id` int(11) NOT NULL,
  `app_hero_title` varchar(255) NOT NULL,
  `app_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_hero`
--

INSERT INTO `app_hero` (`id`, `app_hero_title`, `app_hero_des`) VALUES
(1, 'Application Development', 'We specialize in delivering exceptional digital products and services to global brands, helping them to create seamless user experiences across modern platforms and devices. Our team of experienced designers, developers, and strategists work closely with our clients to understand their business needs and deliver custom solutions that meet their unique requirements. Our approach to digital product design and development is rooted in a deep understanding of user behavior and the latest technologies and trends. We create digital products that are intuitive, visually engaging, and optimized for performance, ensuring that users can easily navigate and engage with your brand.');

-- --------------------------------------------------------

--
-- Table structure for table `app_meta`
--

CREATE TABLE `app_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_meta`
--

INSERT INTO `app_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions offer top-notch mobile app development services for any scale and complexity to get your business or idea up and running.');

-- --------------------------------------------------------

--
-- Table structure for table `app_process`
--

CREATE TABLE `app_process` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `list_item` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_process`
--

INSERT INTO `app_process` (`id`, `heading`, `des`, `icon`, `list_item`) VALUES
(1, 'Planning and Requirements Gathering', 'In this phase we collect all the relevant information from the customer to develop custom software development solutions as per their expectation.', '../upload/s-icon-2 (1).png', ''),
(3, 'Designing the application', 'After planning we create a detailed design for the application, including the user interface, database schema, and any other necessary technical design documents.\r\n', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(4, 'Developing the application', 'Once the design is complete, we begin the implementation phase, writing the code for the application and testing it as we go. We use a variety of tools and technologies to ensure that the application is of high quality and meets our standards for performance and stability.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(5, 'Testing ', 'Before the application is deployed, we thoroughly test it to ensure that it performs as expected and meets the requirements defined in the analysis phase.\r\n', '../upload/s-icon-2 (1).png', ''),
(6, 'Deployment', 'We install the application on the target platform and make it available to users.', '../upload/s-icon-2 (1).png', ''),
(7, 'Maintenance', 'After the application is deployed, we provide ongoing maintenance and support, including fixing any bugs that are discovered and adding new features as needed.\r\n', '../upload/s-icon-2 (1).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `des`, `btn_name`, `btn_link`) VALUES
(1, 'Want Our Services ?', 'Now you can contact our team to solve your problem.', 'Chat with our team', 'https://fabtechsolution-9c507.web.app/#');

-- --------------------------------------------------------

--
-- Table structure for table `blog_hero`
--

CREATE TABLE `blog_hero` (
  `id` int(11) NOT NULL,
  `blog_hero_title` varchar(255) NOT NULL,
  `blog_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_hero`
--

INSERT INTO `blog_hero` (`id`, `blog_hero_title`, `blog_hero_des`) VALUES
(1, 'Our Blog', 'FABTECHSOL Is A Global Web Design And Development Company That Provides Intelligent, Cost-Effective Web And IT Solutions. Thanks To Our Client-First Ideology, We\'ve Gained Worldwide Recognition For The Quality Of Our Products, Services, And Solutions.');

-- --------------------------------------------------------

--
-- Table structure for table `blog_main`
--

CREATE TABLE `blog_main` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img1` text NOT NULL,
  `des1` text NOT NULL,
  `img2` text NOT NULL,
  `des2` text NOT NULL,
  `img3` text NOT NULL,
  `des3` text NOT NULL,
  `img1_alt` text NOT NULL,
  `img2_alt` text NOT NULL,
  `img3_alt` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_des` text NOT NULL,
  `meta_con` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_main`
--

INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(12, 'The Benefits of Interactive Website Design', '../upload/20230315_081759_Blog-post-01-15.jpg', 'In today\'s digital world, having a website is crucial for any business to succeed. However, simply having a website is not enough. A website needs to be engaging, interactive and easy to use in order to grab the attention of visitors and keep them coming back for more. Interactive website design refers to the incorporation of elements that engage visitors and provide a more personalized experience. In this blog post, we will explore the benefits of interactive website design and how it can help your business grow.\r\n<h2><b>1- Increased Engagement:</b></h2>\r\n\r\nInteractive website design can significantly increase visitor engagement on your website. It makes the website more interesting, fun and engaging, which encourages visitors to spend more time on it. For example, using gamification techniques such as quizzes, polls and contests can keep visitors entertained and engaged, leading to increased page views and longer visit duration.\r\n\r\n<h2><b>2- Better User Experience:</b></h2>\r\n\r\nA website that is easy to use and navigate is critical to ensuring a good user experience. Interactive website design can enhance the user experience by providing features that make it easy for visitors to find what they are looking for. For example, a search bar can help visitors find relevant information quickly, while a chatbot can assist with any questions they may have\r\n\r\n<h2><b>3- Improved Brand Perception:</b></h2>\r\n\r\nInteractive website design can help improve brand perception and make your business appear more modern and forward-thinking. It shows that your business is invested in providing the best possible user experience and is willing to go the extra mile to achieve it. This can have a positive impact on the way your business is perceived by visitors and potential customers.\r\n\r\n<h2><b>4- Increased Conversions:</b></h2>\r\n\r\nInteractive website design can also help increase conversions. By providing interactive elements such as forms, surveys and calls-to-action, visitors are more likely to engage with your business and take action, such as making a purchase or signing up for a newsletter. This can lead to increased sales and revenue for your business.\r\n\r\n<h2><b>5- Better Data Collection:</b></h2>\r\n\r\nInteractive website design can also help with data collection. By incorporating forms, surveys and quizzes, businesses can gather valuable data about their visitors, such as their preferences, interests and buying behavior. This data can then be used to create targeted marketing campaigns and improve overall business strategy.\r\n\r\n<h2><b>6- Competitive Advantage:</b></h2>\r\n\r\nInteractive website design can provide a competitive advantage for businesses that use it effectively. It can help your business stand out from the crowd and differentiate itself from competitors. By providing a more engaging and personalized experience, visitors are more likely to remember and recommend your business to others.\r\n\r\n<h2><b>7- Improved SEO:</b></h2>\r\n\r\nInteractive website design can also help improve search engine optimization (SEO). Interactive elements such as videos, infographics and animations can improve the overall quality of a website, which can lead to better search engine rankings. Additionally, interactive elements can increase social shares and backlinks, which are also important factors in SEO.\r\n<br>\r\n<br>\r\n<b>Conclusion:</b>\r\n<br>\r\n<br>\r\nInteractive website design is a powerful tool that can help businesses engage visitors, improve user experience, increase conversions and gather valuable data. By incorporating interactive elements such as gamification techniques, forms, surveys and calls-to-action, businesses can differentiate themselves from competitors and improve overall brand perception. Additionally, interactive website design can improve search engine rankings and provide a competitive advantage. In today\'s digital age, having an interactive website is no longer an option but a necessity for businesses that want to succeed online.', '../upload/20230315_081759_Blog-Post-02-15.jpg', '<h2><b>Benefit from the comfort of your users</b></h2>\r\n\r\nIn today\'s digital age, having a user-friendly website is no longer optional, it\'s a must-have for any business looking to succeed in the online world. As businesses strive to stay competitive, they are beginning to realize that they can no longer ignore the needs and comfort of their users. This is where the concept of user-centric design comes into play. By focusing on the needs and preferences of their users, businesses can create websites that are not only easy to use but also offer a range of benefits, including:\r\n<br>\r\n<br>\r\n<b>1- Increased Conversion Rates:</b> Websites that are easy to use and navigate are more likely to convert visitors into customers. By designing websites with the user\'s needs and preferences in mind, businesses can create a more streamlined and personalized experience that encourages visitors to take action.\r\n<br>\r\n<br>\r\n<b>2- Better Engagement:</b> A website that is easy to use and navigate is more likely to keep visitors engaged for longer periods of time. This can lead to increased brand awareness and loyalty, as well as a higher likelihood of visitors sharing the website with their friends and family.\r\n<br>\r\n<br>\r\n<b>3- Improved Search Engine Optimization (SEO):</b> Search engines like Google prioritize websites that are easy to use and navigate, as they provide a better experience for their users. By focusing on user-centric design, businesses can improve their search engine rankings, leading to increased traffic and visibility.\r\n<br>\r\n<br>\r\n<b>4- Reduced Bounce Rates:</b> A high bounce rate is a clear indication that visitors are not finding what they are looking for on a website. By focusing on user-centric design, businesses can reduce bounce rates by making it easier for visitors to find the information they need.\r\n<br>\r\n<br>\r\n<b>5- Increased Customer Satisfaction:</b> By designing websites that are easy to use and navigate, businesses can increase customer satisfaction and loyalty. This can lead to repeat business, positive reviews and recommendations, and an overall increase in revenue.\r\n<br>\r\n<br>\r\nOne of the main benefits of an interactive website design that prioritizes user comfort is increased engagement. By providing users with a comfortable, intuitive interface, they are more likely to engage with your website or software product for longer periods of time. This increased engagement can lead to higher conversion rates, increased sales, and a more positive brand image.\r\n<br>\r\n<br>\r\nIn addition to increased engagement, designing for user comfort can also lead to increased customer loyalty. When users feel comfortable and satisfied with the experience of using your website or software, they are more likely to return in the future and recommend your product to others. This can lead to a positive feedback loop where satisfied customers become loyal brand advocates, which in turn leads to increased brand awareness and revenue.\r\n<br>\r\n<br>\r\nFurthermore, designing for user comfort can also lead to improved accessibility. By prioritizing ease of use and intuitive navigation, you can ensure that your product is accessible to a wider range of users, including those with disabilities or limited technical expertise. This can help you reach a wider audience and increase the overall impact of your product.\r\n<br>\r\n<br>\r\nOverall, the benefits of prioritizing user comfort in your website or software design cannot be overstated. By providing a comfortable and intuitive experience for your users, you can increase engagement, build customer loyalty, and improve accessibility, all of which can lead to increased revenue and long-term success for your business.\r\n<br>\r\n<br>\r\n\r\nAdditionally, designing for user comfort can also lead to improved efficiency and productivity. A well-designed website or software product that prioritizes user comfort can streamline user workflows, reduce user frustration and minimize errors. This can lead to increased productivity and efficiency, as users are able to complete tasks more quickly and accurately. As a result, your business can benefit from increased productivity and a more streamlined workflow.\r\n<br>\r\n<br>\r\nAnother benefit of prioritizing user comfort is the potential for increased innovation. By creating an environment that is comfortable and intuitive for users, you can encourage creativity and experimentation. This can lead to the development of new features and functionalities that were not previously considered, or the creation of entirely new products that meet the unique needs and preferences of your target audience.\r\n<br>\r\n<br>\r\nLastly, designing for user comfort can also help your business stay competitive in a crowded market. In today\'s digital landscape, customers have high expectations for the products and services they use. By prioritizing user comfort, you can differentiate your product from competitors and build a strong reputation for quality and user satisfaction. This can help your business stand out in a crowded market, attract new customers, and retain existing ones.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">At Fabtechsol</a>, we understand the importance of designing for user comfort and the impact it can have on the success of your business. That\'s why <a href=\"https://fabtechsol.com/services\">our software development services</a> prioritize user-centric design, with a focus on creating products that are intuitive, user-friendly, and efficient. <a href=\"https://fabtechsol.com/contact-us\">Contact us </a>Contact us today to learn more about how we can help your business benefit from the comfort of your users.\r\n', '../upload/20230315_081759_Blog-Post-03-15.jpg', '<h2>Custom Software Development Company FABTECHSOL Services in Website Designing</h2> \r\n\r\n<a href=\"https://fabtechsol.com/\">Fabtechsol</a> is a software development company that specializes in providing user-centric software solutions to businesses of all sizes. Our company understands the importance of user experience and designs software that is not only easy to use but also meets the needs and preferences of our clients\' users. We offer a range of <a href=\"https://fabtechsol.com/services\">software development services</a>, including:\r\n\r\n<h2><b>\r\nCustom Software Development:</h2></b>\r\n\r\nOur team of experienced developers works closely with clients to understand their unique needs and requirements, and then designs and develops customized software solutions that meet those needs. Whether it\'s a <a href=\"https://fabtechsol.com/app-dev-service\">mobile app</a>, <a href=\"https://fabtechsol.com/web-dev-service.php\">web application</a> or enterprise software, we ensure that the software we develop is user-friendly and meets the needs of our clients\' users.\r\n\r\n<h2><b>\r\nUser Experience Design:</h2></b>\r\n\r\nAt Fabtechsol, we believe that user experience is key to the success of any software product. Our team of <a href=\"https://fabtechsol.com/ui-ux-service\">UX designers</a>  works closely with clients to create user-centered designs that are not only visually appealing but also easy to use and navigate. We use the latest design tools and techniques to ensure that our clients\' software products are modern, engaging and meet the needs of their users.\r\n\r\n<h2><b>\r\nQuality Assurance and Testing:</h2></b>\r\n\r\n At Fabtechsol, we believe that quality is key to the success of any software product. That\'s why we have a dedicated team of quality assurance specialists who test and validate all our software products before they are launched. We use a range of testing tools and techniques to ensure that our clients\' software products are bug-free and meet the highest quality standards.\r\n<br>\r\n<br>\r\nIn conclusion,  <a href=\"https://fabtechsol.com/index\">Fabtechsol</a> is a software development company that understands the importance of user-centric design and offers a range of software development services that meet the needs and preferences of our clients\' users. We are committed to providing high-quality software solutions that are easy to use, visually appealing and meet the unique needs of each of our clients. Contact us today to learn more about how we can help your business succeed with our software development services.\r\n<br>\r\n<br>\r\nAt Fabtechsol, we are committed to providing high-quality software development services that meet the needs and preferences of our clients\' users. Our team of experienced developers, designers and support staff are dedicated to ensuring that our clients\' software products are modern, engaging and meet the highest quality standards. Contact us today to learn more about how we can help your business succeed with our software development services.', 'Interactive Website Design Benefits', 'Benefits of user comfort', 'FABTECHSOL Services in Website Designing ', ' Interactive Website Design Benefits | FABTECHSOL', 'Discover the advantages of interactive website design and how it can improve user engagement, brand awareness, and conversion rates.', 'https://fabtechsol.com/blog/benefits-of-interactive-website-design/'),
(3, 'There are 14 significant benefits that businesses can gain from utilizing mobile apps.', '../upload/blog1a.jpg', 'Mobile apps have become an integral part of businesses across different industries. They offer various advantages that have transformed how businesses operate and interact with their customers. In this blog, we will discuss the 14 main advantages of mobile apps for business.', '../upload/blog1b.jpg', '<b>1)Increased Customer Engagement: </b>One of the main advantages of mobile apps for businesses is the increased customer engagement they offer. Mobile apps provide businesses with a direct and convenient way to communicate with their customers, allowing them to respond to inquiries and provide personalized customer support in real-time. By offering a more streamlined and efficient way to engage with customers, businesses can improve the overall customer experience, leading to increased satisfaction and loyalty. Mobile apps also allow businesses to leverage push notifications to send targeted messages and promotions to customers. These notifications can be used to inform customers about new products or services provide updates on existing products, or offer discounts and special offers. By sending personalized and relevant messages to customers, businesses can increase the likelihood of customers making purchases and returning to the app in the future. \r\nAnother benefit of increased customer engagement through mobile apps is the ability to gather valuable customer feedback. Through in-app surveys and feedback forms, businesses can gain insights into customer preferences and opinions, allowing them to make informed decisions and improve products and services. By listening to customer feedback and responding to their needs, businesses can build stronger relationships with their customers and increase customer loyalty.\r\n<br>\r\n<b>2)Improved Customer Experience:</b> Mobile apps have transformed the way businesses interact with their customers, offering a more streamlined and convenient way to access products and services. This improved customer experience is one of the key advantages of mobile apps for businesses. By providing customers with a user-friendly and intuitive interface, businesses can offer a more engaging and personalized experience.\r\nMobile apps allow customers to access products and services at any time, from anywhere. This convenience is a major factor in improving the customer experience, as customers no longer need to visit a physical store or wait for a customer service representative to respond to their inquiries. Instead, they can use the mobile app to browse products, make purchases, and get in touch with customer support at their convenience. Mobile apps can also offer additional features and functionality that enhance the customer experience. For example, businesses can use mobile apps to provide customers with personalized recommendations based on their purchase history or browsing behavior. They can also offer interactive features such as augmented reality or virtual try-on, which can help customers, visualize products before making a purchase.\r\n<br>\r\n<b>3)Enhanced Brand Awareness:</b> Mobile apps are powerful marketing tools that can help businesses enhance their brand awareness. By offering a direct and engaging way to connect with customers, businesses can promote their products and services and reach a wider audience.  Mobile apps allow businesses to showcase their brand identity and personality through features such as personalized messaging, branding elements, and a unique user interface. These elements can help businesses create a memorable and distinctive brand experience that sets them apart from competitors.<br>\r\nMobile apps also offer businesses a way to collect valuable data on customer behavior and preferences. This data can be used to create targeted marketing campaigns that are more likely to resonate with customers and increase brand awareness. By analyzing this data, businesses can gain insights into what customers want and tailor their marketing messages accordingly. Mobile apps can also leverage social media integration to increase brand awareness. By allowing users to share content and promotions on social media platforms, businesses can reach a wider audience and generate more engagement. This can help drive brand recognition and establish the brand as a thought leader in the industry. ', '../upload/blog1c.jpg', 'FabTechSol is a mobile app development company that offers end-to-end mobile app development solutions to businesses of all sizes and across various industries. With a team of experienced mobile app developers, designers, and project managers, FabTechSol provides high-quality and scalable mobile app development services that are tailored to meet the unique needs and requirements of each client. Our mobile app development services include conceptualization, design, development, testing, deployment, and ongoing maintenance and support. The company develops mobile apps for both iOS and Android platforms, utilizing the latest technologies and frameworks to deliver cutting-edge mobile solutions. <br>\r\nThe company specializes in developing mobile apps for various industries, including healthcare, education, e-commerce, finance, and transportation. The team at FabTechSol works closely with clients to understand their business goals, target audience, and user requirements, ensuring that the mobile app is designed and developed to meet their specific needs. FabTechSol\'s mobile app development process is agile and iterative, enabling clients to see progress and provide feedback throughout the development cycle. The company also offers a range of additional services, including mobile app UI/UX design, API development, cloud integration, and app store optimization. <br>\r\nIn addition to mobile app development services, FabTechSol also provides consulting services to help clients develop a mobile strategy and roadmap for their business. The company\'s experienced consultants work with clients to identify the opportunities and challenges presented by mobile technology, and develop a comprehensive mobile strategy that aligns with their business goals and objectives.<br>\r\nFabTechSol is dedicated to delivering high-quality and scalable mobile app development solutions that meet the unique needs and requirements of each client. The company\'s experienced mobile app developers are well-versed in the latest technologies and frameworks, enabling them to develop cutting-edge mobile solutions that are both reliable and user-friendly. FabTechSol\'s mobile app development services include conceptualization, design, development, testing, deployment, and ongoing maintenance and support. The company works closely with clients throughout the development cycle to ensure that the mobile app is designed and developed to meet their specific needs and requirements.  The team at FabTechSol is also well-versed in developing mobile apps for both iOS and Android platforms, and can provide cross-platform solutions that work seamlessly across multiple devices and operating systems. This enables businesses to reach a wider audience and maximize the impact of their mobile app. In addition to mobile app development services, FabTechSol also offers a range of additional services that can help businesses develop a comprehensive mobile strategy. The company\'s experienced consultants can help businesses identify the opportunities and challenges presented by mobile technology, and develop a strategy that aligns with their business goals and objectives. <br>\r\nOverall, FabTechSol is a trusted partner for businesses looking to develop a mobile app that meets their unique needs and requirements. With a focus on delivering innovative and personalized mobile solutions, the company is well-positioned to help businesses leverage the power of mobile technology to improve customer engagement, increase productivity, and achieve their business goals.', '', '', '', '', '', ''),
(8, 'Why UX Testing Should be an Essential Component of Your Business Strategy', '../upload/20230314_091806_Blog-Poster-Design.jpg', 'User experience (UX) testing is an essential component of any business strategy. In today\'s digital age, customers expect seamless and intuitive experiences when they interact with brands. If your website or app is difficult to navigate or confusing to use, customers will quickly move on to a competitor. This is why investing in UX testing is crucial to the success of your business.\r\nIn this blog post, we will explore the importance of UX testing and why it should be a key part of your business strategy. We will also look at the benefits of UX testing, the different types of UX testing available, and how to incorporate UX testing into your business processes.\r\n\r\n<h2><b>What is UX testing?</b></h2>\r\n\r\nUX testing is the process of evaluating the usability and overall user experience of a product or service. UX testing involves observing and analyzing how users interact with a product or service, identifying pain points and areas for improvement, and making changes to improve the overall user experience.\r\n\r\nThere are many different types of UX testing, including usability testing, A/B testing, user interviews, and surveys. Each type of testing provides valuable insights into the user experience and can help businesses make informed decisions about product development and design.\r\n\r\n<h2><b>Why is UX testing important?</b></h2>\r\n\r\nUX testing is important for a number of reasons. Firstly, it helps businesses understand how users interact with their products or services. This understanding is crucial for making informed decisions about product development and design. UX testing can help identify pain points and areas for improvement, which can ultimately lead to a better user experience and increased customer satisfaction.\r\n\r\nSecondly, UX testing can help businesses reduce costs and improve efficiency. By identifying areas for improvement, businesses can make targeted changes to improve the user experience, which can result in fewer customer complaints, lower support costs, and improved customer retention.\r\n\r\nFinally, UX testing can help businesses differentiate themselves from their competitors. In today\'s crowded digital marketplace, a seamless and intuitive user experience can be a key differentiator. By investing in UX testing and continuously improving the user experience, businesses can create a competitive advantage and improve their chances of success.\r\n\r\n<h2><b>Benefits of UX testing</b></h2>\r\n\r\nThere are many benefits to incorporating UX testing into your business strategy. Some of the key benefits include:\r\n\r\nImproved user experience: The primary benefit of UX testing is the ability to improve the user experience. By identifying pain points and areas for improvement, businesses can make targeted changes to improve the overall user experience and increase customer satisfaction.\r\n\r\nIncreased customer retention: A better user experience can lead to increased customer retention. Customers are more likely to return to a website or app that is easy to use and provides a seamless experience.\r\n\r\nReduced support costs: By improving the user experience, businesses can reduce support costs. When users can easily find the information they need and complete tasks without difficulty, they are less likely to need support from customer service.\r\n\r\nHigher conversion rates: A better user experience can lead to higher conversion rates. When users find it easy to complete tasks and navigate a website or app, they are more likely to convert into paying customers.\r\n\r\nCompetitive advantage: By investing in UX testing and continuously improving the user experience, businesses can create a competitive advantage and differentiate themselves from their competitors.\r\n', '../upload/20230314_091806_Blog-paster-design-02.jpg', '<h2><b>1-Improve User Satisfaction</b></h2>\r\n\r\nImproving user satisfaction is a key goal of UX testing. When users have a positive experience with a website or app, they are more likely to become loyal customers and recommend the product to others. To improve user satisfaction, businesses should focus on creating a seamless and intuitive user experience. This can be achieved through UX testing, which can identify pain points and areas for improvement. By making targeted changes to the design and functionality of a product, businesses can create a more satisfying user experience. This can include simplifying the navigation, improving load times, and providing clear and concise instructions. By continually testing and refining the user experience, businesses can improve user satisfaction and ultimately drive business success.\r\n\r\n<h2><b>2-  Increase Conversion Rates</b></h2>\r\n\r\nIncreasing conversion rates is another key benefit of UX testing. A high conversion rate means that users are successfully completing desired actions, such as making a purchase or filling out a contact form. To increase conversion rates, businesses need to create a user experience that is engaging and encourages users to take action. UX testing can help identify areas for improvement, such as simplifying the checkout process, improving the clarity of calls-to-action, and optimizing the design of landing pages. By making these targeted changes, businesses can create a more effective user experience that drives conversions. UX testing can also help businesses understand the specific factors that influence user behavior and decision-making, allowing them to create a more effective marketing strategy. Ultimately, by focusing on improving the user experience and increasing conversion rates, businesses can drive revenue growth and achieve long-term success.\r\n\r\n<h2><b>3- Reduce Development Costs</b></h2>\r\n\r\nReducing development costs is another benefit of UX testing. By identifying pain points and areas for improvement early in the development process, businesses can avoid costly redesigns and iterations later on. UX testing can also help businesses prioritize development efforts, ensuring that resources are focused on the areas that will have the biggest impact on the user experience. This can include simplifying the design, eliminating unnecessary features, and streamlining the development process. By making these targeted changes, businesses can reduce development costs and improve the overall quality of the product. Additionally, by continually testing and refining the user experience, businesses can avoid the need for expensive redesigns in the future, further reducing development costs. Ultimately, by investing in UX testing and creating a more efficient development process, businesses can improve their bottom line and achieve long-term success.\r\n\r\n<h2><b>4- Gain Competitive Advantage</b></h2>\r\n\r\nGaining a competitive advantage is another important benefit of UX testing. In today\'s digital landscape, user experience has become a key differentiator for businesses. By providing a seamless and intuitive user experience, businesses can stand out from their competitors and attract and retain customers. UX testing can help businesses identify areas where they can differentiate themselves from their competitors, such as by offering unique features or simplifying the user experience. By continually testing and refining the user experience, businesses can stay ahead of their competitors and ensure that they are meeting the needs of their users. This can lead to increased customer loyalty, higher customer satisfaction, and ultimately, greater success in the marketplace. By investing in UX testing and creating a user experience that stands out from the competition, businesses can gain a competitive advantage and achieve long-term success.\r\n\r\n<h2><b>5-  Gain Insights into User Behavior</b></h2>\r\n\r\nGaining insights into user behavior is another valuable benefit of UX testing. By observing how users interact with a product, businesses can gain a deeper understanding of their needs, preferences, and behaviors. UX testing can provide insights into how users navigate a website or app, what features they find most useful, and what pain points they encounter. This information can be used to inform the design and development process, ensuring that the product meets the needs and expectations of its users. Additionally, by gaining insights into user behavior, businesses can identify opportunities for innovation and improvement. For example, they may discover that users are using a product in ways that were not originally intended, or that there is a need for a new feature or functionality. By continually testing and refining the user experience, businesses can stay ahead of changing user needs and preferences and ensure that they are providing a product that meets their users\' needs. Ultimately, by investing in UX testing and gaining insights into user behavior, businesses can create a more effective and innovative product and achieve long-term success.\r\n\r\n<h2><b>6-  Enhance Brand Reputation</b></h2>\r\n\r\nEnhancing brand reputation is another benefit of UX testing. A positive user experience can have a significant impact on how users perceive a brand. When users have a seamless and intuitive experience with a product, they are more likely to associate positive feelings with the brand. This can lead to increased brand loyalty, positive word-of-mouth marketing, and ultimately, greater success in the marketplace. By investing in UX testing and creating a user experience that is tailored to the needs and preferences of its users, businesses can enhance their brand reputation and stand out from their competitors. Additionally, by continually testing and refining the user experience, businesses can demonstrate a commitment to their users and a dedication to providing a high-quality product. This can further enhance their brand reputation and increase customer loyalty. Ultimately, by investing in UX testing and enhancing their brand reputation, businesses can achieve long-term success and build a strong and loyal customer base.', '../upload/20230314_091806_Blog-poster-03.jpg', '<a href=\"https://fabtechsol.com/\">Fabtechsol</a> is a leading provider of high-quality <a href=\"https://fabtechsol.com/ui-ux-service\">UX/UI design services</a>. We understand the importance of user experience and how it can affect the success of a product or service. <a href=\"https://fabtechsol.com/about\">Our team </a>of expert designers works closely with clients to create custom designs that are not only visually appealing but also intuitive and user-friendly.\r\n<br>\r\n<br>\r\nWe believe that a successful design requires an in-depth understanding of the client\'s needs and the target audience. Our team spends time researching and analyzing the client\'s business, industry, and competitors to create a unique design that reflects the client\'s brand and meets the needs of their users.\r\n<br>\r\n<br>\r\nWe use the latest design tools and techniques to create designs that are responsive, scalable, and optimized for different devices and platforms. Our design process is collaborative and transparent, ensuring that the client is involved and informed every step of the way.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">At Fabtechsol</a>, we take pride in delivering designs that not only meet but exceed our client\'s expectations. We believe that a well-designed product or service is key to achieving business success and we are committed to helping our clients achieve their goals. Contact us today to learn more about our <a href=\"https://fabtechsol.com/ui-ux-service\">UX/UI design services</a> and how we can help you improve your user experience.\r\n<br>\r\n<br>\r\nwe also offer a range of related <a href=\"https://fabtechsol.com/services\">services</a>  to help our clients achieve their goals. These services include user research, wireframing, prototyping, usability testing, and design optimization.\r\n<br>\r\n<br>\r\nUser research is a crucial step in the design process, as it allows us to gain a better understanding of the user\'s needs and preferences. We conduct user research through surveys, interviews, and user testing to gather valuable insights that inform our design decisions.\r\n<br>\r\n<br>\r\nWireframing and prototyping are essential steps in the design process, as they allow us to create a visual representation of the product before it is fully developed. This helps us to identify any issues or areas for improvement before the product is released to the market.\r\n<br>\r\n<br>\r\nUsability testing is another important step in the design process, as it allows us to evaluate the user experience and identify any usability issues. We conduct usability testing to ensure that our designs are user-friendly, intuitive, and easy to use.\r\n<br>\r\n<br>\r\nDesign optimization is an ongoing process that involves continuously improving the design based on user feedback and data. We use data analytics and user feedback to identify areas for improvement and make adjustments to the design to optimize the user experience.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">At Fabtechsol,</a>  we are committed to providing comprehensive design services that help our clients achieve their goals. We work closely with our clients to understand their needs and provide customized solutions that meet their specific requirements. Contact us today to learn more about our UX/UI design services and related services and how we can help you improve your user experience.', 'UX Testing ', 'Benefits of UX testing', 'fabtechsol ui/ux services', '', '', '');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(107, 'The top programming languages for building mobile applications', '../upload/20230411_144056_b2-a.jpg', 'Mobile applications have become an essential part of our daily lives, and with the rise of smartphones and tablets, the demand for mobile app development has increased rapidly. But, with the plethora of programming languages available, choosing the right language for building a mobile application can be a daunting task. In this blog post, we\'ll explore the top programming languages for building mobile applications, including native, cross-platform, and web technologies.<br><br><b> Native App Development Languages</b><br><br>Native app development languages are specifically designed for building mobile apps for a specific platform, either Android or iOS. These languages offer direct access to hardware and operating system features, which results in faster performance and better integration with the platform\'s features. Here are the top three native app development languages:A. <h2><b>Java</b></h2>Java is a popular programming language for building Android applications. It is a high-level, object-oriented programming language that is easy to learn and offers a wide range of libraries and tools for app development. Some advantages of using Java for Android app development include:<br><br>Platform independence: Java is platform-independent, which means that the same code can be used across multiple platforms.<br>Large developer community: There is a large community of Java developers who can offer support and guidance when developing Android applications.<br>Scalability: Java allows for building large and complex applications that can scale over time.<br><br>However, some disadvantages of using Java for Android app development include:<br><br>Memory management: Memory management in Java can be challenging, as it is managed by the Android system and can lead to performance issues if not optimized properly.<br>Slow startup time: Java applications tend to have a slow startup time due to the overhead of the Android system.<br><br>Some popular apps built with Java include Instagram, Airbnb, and Pinterest.B. <h2><b>Swift</b></h2>Swift is a relatively new programming language specifically designed for building iOS applications. It is a powerful and easy-to-learn language that offers a high level of interactivity with the iOS platform. Some advantages of using Swift for iOS app development include:<br><br>Faster development: Swift offers a faster development time due to its simpler syntax and fewer code lines.<br>Safety: Swift offers improved safety features, such as optionals and type inference, which help prevent runtime errors.<br>Performance: Swift is designed to run faster and more efficiently than Objective-C, the previous primary programming language for iOS app development.<br><br>However, some disadvantages of using Swift for iOS app development include:<br><br>Learning curve: Swift is a new language, so there is a learning curve involved for developers who are not familiar with it.<br>Limited developer community: Swift has a smaller developer community than Java or Kotlin, which means fewer resources and support.<br><br>Some popular apps built with Swift include Lyft, Airbnb, and LinkedIn.C. <h2><b>Kotlin</b></h2>Kotlin is a modern programming language that was developed by JetBrains for building Android applications. It is a versatile and concise language that can be used for developing server-side applications as well. Some advantages of using Kotlin for Android app development include:<br><br>Interoperability: Kotlin is interoperable with Java, which means that it can be used alongside Java code in Android applications.<br>Concise syntax: Kotlin offers a concise syntax that reduces the amount of boilerplate code required for Android app development.<br>Null safety: Kotlin offers improved null safety features, which help prevent runtime errors caused by null values.<br><br>However, some disadvantages of using Kotlin for Android app development include:<br><br>Limited developer community: Kotlin has a smaller developer community than Java, which means fewer resources and support.<br>Learning curve: Kotlin is a new language, so there is a learning curve involved for developers who are not familiar with it.', '../upload/20230411_144056_b2-b.jpg', '<h2><b>Cross-Platform App Development Languages</b></h2>Cross-platform app development languages allow developers to write code once and deploy it across multiple platforms, including Android and iOS. These languages use frameworks and tools that enable the creation of apps that look and feel like native apps, without having to write platform-specific code. Here are the top three cross-platform app development languages:A. <h2><b>React Native</b></h2>React Native is a popular cross-platform app development language that was developed by Facebook. It allows developers to build high-performance mobile apps for both Android and iOS platforms, using JavaScript and React. Some advantages of using React Native for app development include:<br><br>Faster development: React Native offers a faster development time due to its use of reusable code components.<br>Better user experience: React Native provides a better user experience by rendering components natively, resulting in smoother and faster animations.<br>Large developer community: React Native has a large and active developer community that provides support and resources for app development.<br><br>However, some disadvantages of using React Native for app development include:<br><br>Limited access to device features: React Native does not offer direct access to all device features, which can be limiting for some app features<br>.Debugging issues: Debugging can be challenging in React Native, especially for large projects with many components.<br><br>Some popular apps built with React Native include Facebook, Instagram, and UberEats.B. <h2><b>Flutter</b></h2>Flutter is a popular cross-platform app development language developed by Google. It allows developers to build high-performance mobile apps for both Android and iOS platforms, using Dart programming language. Some advantages of using Flutter for app development include:<br><br>Faster development: Flutter offers a faster development time due to its use of hot reload, which allows for fast code changes without having to restart the app.<br>Better user experience: Flutter provides a better user experience by rendering components natively, resulting in smoother and faster animations.<br>Large developer community: Flutter has a growing and active developer community that provides support and resources for app development.<br><br>However, some disadvantages of using Flutter for app development include:<br><br>Limited third-party libraries: Flutter is a relatively new language, which means that there are fewer third-party libraries and tools available compared to other languages.<br>Smaller developer community: Flutter has a smaller developer community compared to other languages, which means that there are fewer resources and support available.<br><br>Some popular apps built with Flutter include Google Ads, Alibaba, and Reflectly.C. <h2><b>Xamarin</b></h2>Xamarin is a popular cross-platform app development language developed by Microsoft. It allows developers to build high-performance mobile apps for both Android and iOS platforms, using C# programming language. Some advantages of using Xamarin for app development include:<br><br>Code reusability: Xamarin allows for the reuse of up to 90% of the code between different platforms, which reduces development time and costs.<br>Access to native APIs: Xamarin offers direct access to native APIs, which allows for the creation of apps with native look and feel.<br>Large developer community: Xamarin has a large and active developer community that provides support and resources for app development.<br><br>However, some disadvantages of using Xamarin for app development include:Learning curve: C# programming language may have a learning curve for developers who are not familiar with it.<br>Memory management issues: Xamarin may have memory management issues that can lead to performance issues if not optimized properly.<br><br>Some popular apps built with Xamarin include Alaska Airlines, Storyo, and Olo.III. <h2><b>Web Technologies for Mobile App Development</b></h2>Web technologies allow developers to create mobile apps using web development languages, such as HTML, CSS, and JavaScript. These apps can then be packaged and distributed as native apps. Here are the top three web technologies for mobile app development:<br><br>A. <b>Ionic</b>Ionic is a popular web technology for building mobile apps that use HTML, CSS, and JavaScript. It offers a wide range of pre-built UI components and a robust command-line interface for building, testing, and deploying apps. Some advantages of using Ionic for app development include:<br><br>Faster development: Ionic allows for faster development due to its use of pre-built UI components and a command-line interface for building and testing apps.<br>Wide range of plugins and extensions: Ionic offers a wide range of plugins and extensions that provide access to device features, such as the camera and GPS.<br>Large developer community: Ionic has a large and active developer community that provides support and resources for app development.<br><br>However, some disadvantages of using Ionic for app development include:Performance issues: Apps built with Ionic may experience performance issues due to their reliance on web technologies.<br>Limited access to native APIs: Ionic apps may have limited access to native APIs, which can be limiting for some app features.<br><br>Some popular apps built with Ionic include Sworkit, Untappd, and Pacifica.B. <h2><b>React Native Web</b></h2>React Native Web is a web technology that allows developers to build mobile apps using the React Native framework and web technologies, such as HTML, CSS, and JavaScript. It enables the creation of mobile apps that can be deployed as web apps, as well as native apps for both Android and iOS platforms. Some advantages of using React Native Web for app development include:<br><br>Code reusability: React Native Web allows for the reuse of up to 95% of the code between web and native apps, which reduces development time and costs.<br>Access to native APIs: React Native Web offers direct access to native APIs, which allows for the creation of apps with native look and feel.<br>Large developer community: React Native Web has a large and active developer community that provides support and resources for app development.<br><br>However, some disadvantages of using React Native Web for app development include:Limited support for older browsers: React Native Web may not be compatible with older browsers, which can limit the reach of the app.<br>Limited access to some device features: React Native Web may not offer direct access to all device features, which can be limiting for some app features.<br><br>Some popular apps built with React Native Web include Uber, Pinterest, and Airbnb.C. <h2><b>Progressive Web Apps (PWAs)</b></h2>Progressive Web Apps are web-based apps that provide a native app-like experience to users. They are built using web technologies, such as HTML, CSS, and JavaScript, and are designed to be reliable, fast, and engaging. Some advantages of using PWAs for app development include:<br><br>Faster development: PWAs can be developed quickly due to their use of web technologies and the absence of app store approval processes.<br>Offline functionality: PWAs can work offline, which allows for a seamless user experience even when there is no internet connection.<br>Easy distribution: PWAs can be distributed easily, without the need for app stores or complex installation processes.<br><br>However, some disadvantages of using PWAs for app development include:<br><br>Limited access to device features: PWAs may have limited access to some device features, such as push notifications and background sync.<br>Limited support for older browsers: PWAs may not be compatible with older browsers, which can limit the reach of the app.<br><br>Some popular PWAs include Twitter, Starbucks, and Tinder.<br><br>In conclusion, choosing the right programming language for mobile app development depends on several factors, such as development time, performance, access to native APIs, and developer community support. Native app development languages, such as Swift and Kotlin, provide the best performance and access to device features, but they require platform-specific development. Cross-platform app development languages, such as React Native, Flutter, and Xamarin, provide faster development times and a wide range of pre-built UI components, but may have limited access to some device features. Web technologies, such as Ionic', '../upload/20230411_144056_b2-c.jpg', '<h2><b>FabTechSol: Your Trusted Partner for Mobile App Development with Top Programming Languages</b></h2>FabTechSol is a custom software development company that provides a range of application development services. Our team of experienced developers specializes in building mobile apps using the latest programming languages and technologies to deliver high-quality and reliable solutions to our clients.<br><br>One of the main advantages of working with FabTechSol is our commitment to using the top programming languages for building mobile applications. Our team is skilled in a wide range of programming languages, including Swift, Kotlin, React Native, Flutter, and Ionic, and we are always staying up-to-date with the latest trends and technologies in the industry.<br><br>Our approach to mobile app development is highly collaborative, and we work closely with our clients to understand their needs and develop customized solutions that meet their unique requirements. Our team is highly skilled in designing and building user-friendly, intuitive, and engaging apps that provide a seamless user experience and drive user engagement.<br><br>At FabTechSol, we prioritize performance, security, and scalability in all our development projects. We utilize best practices in coding, testing, and deployment to ensure that our apps are high-performing, secure, and scalable. Our goal is to deliver applications that not only meet our clients\' immediate needs but also provide a solid foundation for future growth and development.<br><br>In addition to mobile app development, we also offer a range of related services, such as backend development, API development, and cloud infrastructure management. Our comprehensive approach to app development allows us to provide end-to-end solutions that meet all our clients\' needs and exceed their expectations.<br><br>Overall, FabTechSol is a trusted and reliable partner for mobile app development services. With our expertise in the top programming languages for building mobile applications, our collaborative approach, and our commitment to quality, we are confident in our ability to deliver innovative and high-performing apps that drive business success.', 'The top programming languages', 'Cross-Platform App Development Languages', 'Trusted Partner for Mobile App Development', 'Top Programming Languages for Mobile App Development - FabTechSol', 'Looking to build a mobile app? Discover the top programming languages used by FabTechSol for high-quality, reliable solutions. Partner with us for expert app development services.', 'top-programming-languages-for-mobile-app-development'),
(16, 'The Top 5 Website Design Trends to Watch for in 2023.', '../upload/20230318_130314_Blog-01 (1).jpg', 'In today\'s digital age, having a website that is visually appealing and user-friendly is essential for any business or individual looking to make an impact online. <a href=\"https://fabtechsol.com/\">Website design </a> trends are constantly evolving, and staying up-to-date with the latest trends is crucial for maintaining a modern and engaging online presence.\r\n<br>\r\n<br>\r\nAs we approach 2023, it\'s important to look ahead and consider the top website design trends that are likely to dominate in the coming years. In this blog post, we\'ll take a closer look at the top 5 website design trends to watch for in 2023, along with some sub-headings and keywords to help you better understand each trend.\r\n<h2>1- Augmented Reality (AR) and Virtual Reality (VR) Integration</h2>\r\n As AR and VR technology continue to evolve and become more accessible, website designers are beginning to experiment with integrating these technologies into their designs. AR and VR can add a new level of interactivity and engagement to websites, allowing users to experience products or services in a more immersive way.</h2> \r\n<br>\r\n<br>\r\n<b>Advancements in AR and VR Technology</b>\r\n<br>\r\n<br>\r\nWith the continued advancements in AR and VR technology, website designers will have more tools and resources to create engaging and interactive experiences for users.\r\n<br>\r\n<br>\r\n<b>Designing for Immersive Experiences</b>\r\n<br>\r\n<br>\r\nDesigning for AR and VR requires a different approach than traditional website design. In order to create a truly immersive experience, designers will need to consider factors such as spatial awareness and user interaction.\r\n<h2>2- Minimalist Design</h2>\r\nMinimalism has been a popular design trend for several years now, and it\'s not going anywhere anytime soon. In fact, as we head into 2023, we can expect to see even more websites adopting a minimalist design aesthetic.\r\n<br>\r\n<br>\r\nOne of the key features of minimalist design is the use of negative space. By leaving ample white space around content, designers can draw attention to key elements and create a more visually pleasing overall design.\r\n<br>\r\n<br>\r\n<b>Simplifying Navigation</b>\r\n<br>\r\n<br>\r\nMinimalist design also often means simplifying navigation. Rather than overwhelming users with a plethora of navigation options, designers will aim to create clear and concise navigation that is easy for users to understand and use.\r\n\r\n<h2>3- Dark Mode</h2>\r\n\r\nDark mode has been a popular trend in recent years, and it\'s likely to continue to gain traction in 2023. Dark mode is a design aesthetic that uses a dark background with light text and design elements.\r\n<br>\r\n<br>\r\n<b>Benefits of Dark Mode</b>\r\n<br>\r\n<br>\r\nOne of the main benefits of dark mode is that it can reduce eye strain and improve readability in low-light conditions. Additionally, dark mode can create a sleek and modern design aesthetic that appeals to many users.\r\n<br>\r\n<br>\r\n<b>Designing for Dark Mode</b>\r\n<br>\r\n<br>\r\nDesigning for dark mode requires a different approach than traditional website design. Designers will need to consider factors such as contrast and readability when creating designs for a dark background.\r\n\r\n', '../upload/20230318_130314_Blog-02 (1).jpg', '<h2>4- 3D Design</h2>\r\nWith the increasing popularity of AR and VR, we can also expect to see more websites adopting 3D design elements in the coming years. 3D design can add depth and visual interest to websites, making them more engaging for users.\r\n<br>\r\n<br>\r\n<b>Creating 3D Designs</b>\r\n<br>\r\n<br>\r\nCreating 3D designs for websites requires specialized software and expertise. As 3D design becomes more popular, we can expect to see more designers specializing in this area.\r\n<br>\r\n<br>\r\n<b>Balancing 3D and 2D Elements</b>\r\n<br>\r\n<br>\r\nWhile 3D design can add visual interest, it\'s important to balance 3D\r\n<h2>5- Personalization and Customization</h2>\r\nAs the internet becomes more saturated with content, personalization and customization are becoming increasingly important for website design. Users want to feel like they are being catered to on a personal level, and website designers are beginning to respond by creating personalized and customized experiences.\r\n<br>\r\n<br>\r\n<b>Data-Driven Design</b>\r\n<br>\r\n<br>\r\nIn order to create personalized experiences, designers will need to rely on data-driven design principles. By analyzing user data, designers can gain insights into user preferences and behaviors, allowing them to create personalized experiences that are tailored to each individual user.\r\n<br>\r\n<br>\r\n<b>Modular Design</b>\r\n<br>\r\n<br>\r\nModular design, which involves creating interchangeable and customizable design elements, is becoming increasingly popular for creating personalized experiences. With modular design, users can customize their experience by choosing from a variety of design elements, such as color schemes and font choices.\r\n<br>\r\n<br>\r\nAs we approach 2023, website design trends are continuing to evolve and change. From augmented reality and virtual reality integration to minimalist design and dark mode, there are a variety of design trends to watch for in the coming years. By staying up-to-date with the latest design trends and incorporating them into your website design, you can create a modern and engaging online presence that stands out from the crowd.\r\n<br>\r\n<br>\r\nFor Augmented Reality (AR) and Virtual Reality (VR) Integration, one of the biggest benefits is the ability to create immersive experiences that allow users to interact with products or services in a more meaningful way. For example, a furniture retailer could create an AR or VR experience that allows users to visualize how a piece of furniture would look in their home before making a purchase.\r\n<br>\r\n<br>\r\nMinimalist design is all about simplifying the user experience and focusing on the essentials. This can help improve usability and make it easier for users to find what they are looking for on a website. Additionally, a minimalist design can help a website load faster and improve its overall performance.\r\n<br>\r\n<br>\r\nDark mode is particularly popular among younger audiences and can help create a more modern and sophisticated design aesthetic. Additionally, it can help reduce eye strain and improve readability in low-light conditions, which is particularly important for mobile devices.\r\n3D design can add a new level of depth and visual interest to websites. However, it\'s important to use 3D elements strategically and not overwhelm the user with too many complex design elements. Additionally, it\'s important to balance 3D elements with 2D elements to create a cohesive design.\r\n', '../upload/20230318_130314_Blog-03 (1).jpg', '<h2>Creating Modern and Engaging Online Experiences with FABTECHSOl\'s Website Development Services</h2>\r\n\r\n<a href=\"https://fabtechsol.com/\">FABTECHSOl </a>is a <a href=\"https://fabtechsol.com/\"> software development company</a> that specializes in website development services. With a team of experienced developers and designers, <a href=\"https://fabtechsol.com/\">FABTECHSOl </a> helps clients create modern and engaging online experiences that meet their unique business needs.\r\n<br>\r\n<br>\r\nOne of the key advantages of working with <a href=\"https://fabtechsol.com/\">FABTECHSOl </a> is their ability to stay up-to-date with the latest website design trends. As we approach 2023, <a href=\"https://fabtechsol.com/\">FABTECHSOl </a> is well-positioned to help clients take advantage of emerging trends like augmented reality and virtual reality integration, minimalist design, dark mode, 3D design, and personalization and customization.\r\n<br>\r\n<br>\r\nFor clients interested in creating immersive experiences, FABTECHSOl can help integrate AR and VR elements into their website design. By leveraging these technologies, clients can create engaging experiences that allow users to interact with their products or services in a more meaningful way.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">FABTECHSOl </a> can also help clients create minimalist designs that focus on the essentials and improve usability. By creating a streamlined user experience, clients can increase engagement and drive more conversions.\r\n<br>\r\n<br>\r\nFor clients looking to create a modern and sophisticated design aesthetic, FABTECHSOl can help implement dark mode. With dark mode, clients can create a design that feels more contemporary and reduces eye strain for users.\r\n<br>\r\n<br>\r\nAdditionally, FABTECHSOl can help clients incorporate 3D design elements into their website design. By using 3D design strategically, clients can add a new level of depth and visual interest to their website without overwhelming the user.\r\n<br>\r\n<br>\r\nFinally, <a href=\"https://fabtechsol.com/\">FABTECHSOl </a> can help clients create personalized and customized experiences through data-driven design principles and modular design. By analyzing user data and creating interchangeable design elements, clients can create online experiences that feel personal and relevant to each user.\r\n<br>\r\n<br>\r\nOverall, FABTECHSOl is well-positioned to help clients take advantage of the website design trends to watch for in 2023. With a focus on creating modern and engaging online experiences, FABTECHSOl can help clients improve their brand\'s visibility, increase engagement, and ultimately drive more conversions.', 'Top 5 Website Design', '3D Design', 'fabtechsol website design services', 'Top 5 Website Design Trends to Watch for in 2023 | FABTECHSOL', 'Discover the top website design trends to keep an eye on in 2023, including augmented and virtual reality integration, minimalist design, dark mode, 3D design, and personalization and customization.', 'https://fabtechsol.com/blog/the-top-5 -website-design-trends-to-watch-for-in-2023/'),
(15, 'Why Responsive Web Design is Essential for Your Business in 2023', '../upload/20230317_092951_Blog-01.jpg', 'As we head into 2023, it\'s more important than ever for businesses to have a responsive website. With mobile devices becoming increasingly popular, it\'s crucial that your website is able to adapt to different screen sizes and resolutions. In this blog post, we\'ll explore why responsive web design is essential for your business in 2023, and how it can help you stay ahead of the competition.\r\n<h2>What is Responsive Web Design?</h2>\r\nFirst, let\'s define what we mean by responsive web design. Responsive design is a web development approach that creates a website that is flexible and adaptable to different screen sizes and resolutions. With a responsive website, the layout and content of your website will adjust and adapt based on the device being used to view it. This means that your website will look great on desktops, laptops, tablets, and smartphones alike\r\n<h2>Why Responsive Web Design is Important</h2>\r\n\r\nNow that we\'ve defined what responsive web design is, let\'s explore why it\'s so important for businesses in 2023. Here are some key reasons:\r\n<br>\r\n<br>\r\n<b>Improved User Experience</b>\r\n<br>\r\n<br>\r\nWith more and more people accessing the internet on mobile devices, it\'s essential that your website is optimized for mobile. A responsive website will ensure that your website is easy to navigate and use on any device, which will improve the user experience for your customers. This, in turn, can lead to increased engagement, higher conversion rates, and more sales.\r\n<br>\r\n<br>\r\n<b>Increased Visibility on Search Engines</b>\r\nIn recent years, Google has made it clear that responsive web design is an important factor in search engine rankings. In fact, Google has stated that it \"recommends webmasters follow the industry best practice of using responsive web design.\" This means that if you want your website to appear high in search engine results pages (SERPs), you need to have a responsive website.\r\n\r\n', '../upload/20230317_092951_Blog-02.jpg', '<h2> The Risks of Not Having a Responsive Website</h2>\r\nIf your website isn\'t responsive, you risk losing potential customers. Here are some of the risks associated with not having a responsive website:\r\n<br>\r\n<br>\r\n<b>1- Poor User Experience</b>\r\n<br>\r\n<br>\r\nIf your website doesn\'t work well on mobile devices, users are likely to leave and look for a competitor who has a better mobile experience.\r\n\r\n<br>\r\n<br>\r\n<b>2- Lower Search Engine Rankings</b>\r\n<br>\r\n<br>\r\nAs we mentioned earlier, Google considers responsive web design an important factor in search engine rankings. If your website isn\'t responsive, you may be penalized in search rankings.\r\n<br>\r\n<br>\r\n<b>3- Missed Opportunities</b>\r\n<br>\r\n<br>\r\nWith more and more people accessing the internet on mobile devices, not having a responsive website means you\'re missing out on potential customers who are browsing on their smartphones and tablets.\r\n<h2><b>Key Elements of Responsive Web Design</b></h2>\r\nNow that we understand the importance of responsive web design, let\'s explore some of the key elements that make up a responsive website.\r\n<br>\r\n<br>\r\n<b> Flexible Layouts</b> A responsive website should have a flexible layout that can adapt to different screen sizes and resolutions. This means that your website\'s layout should adjust and change depending on the device being used to view it.\r\n<br>\r\n<br>\r\n<b> Scalable Images</b> Images on your website should be scalable, which means they can be resized without losing quality. This is important because it ensures that images look great on any device, regardless of the screen size.\r\n<br>\r\n<br>\r\n<b>Mobile-Friendly Navigation</b>\r\nNavigation on a responsive website should be easy to use on mobile devices. This means that menus should be easy to navigate with fingers, and links and buttons should be large enough to click on with a touch screen.\r\n<br>\r\n<br>\r\n<b>Fast Loading Times</b> Another important element of responsive web design is fast loading times. Mobile users expect websites to load quickly, and a slow-loading website can lead to frustration and a poor user experience.', '../upload/20230317_092951_Blog-03.jpg', '<h2>FABTECHSOL: Your Responsive Web Design Solution</h2>\r\nAt FABTECHSOL, we understand the importance of responsive web design in 2023. That\'s why we specialize in creating beautiful, responsive websites that are optimized for mobile devices. Here\'s what sets us apart:\r\n<br>\r\n<br>\r\n<b>Custom Designs</b>\r\n<br>\r\n<br>\r\nWe don\'t use templates or cookie-cutter designs. Instead, we work with you to create a custom website that is tailored to your business and your brand.\r\n<br>\r\n<br>\r\n<b>Mobile Optimization</b>\r\n<br>\r\n<br>\r\nAll of our websites are designed with mobile in mind. We ensure that your website looks great and works well on all devices, from desktops to smartphones.\r\n<br>\r\n<br>\r\n<b>Fast Loading Times</b>\r\n<br>\r\n<br>\r\nWe optimize all of our websites for fast loading times, ensuring that your users have a great experience on your website, no matter what device they\'re using.\r\n<br>\r\n<br>\r\n<b>SEO-Friendly</b>\r\n<br>\r\n<br>\r\nAll of our websites are designed with search engine optimization (SEO) in mind. We ensure that your website is structured and coded in a way that helps it rank higher in search engine results pages.\r\n<br>\r\n<br>\r\nIn conclusion, responsive web design is essential for businesses in 2023. With more and more people accessing the internet on mobile devices, it\'s crucial that your website is able to adapt to different screen sizes and resolutions. At FABTECHSOL, we specialize in creating beautiful, responsive websites that are optimized for mobile devices. Contact us today to learn more about how we can help you stay ahead of the competition with a responsive website.\r\n<br>\r\n<br>\r\n<b> Conclusion</b>\r\n<br>\r\n<br>\r\nIn conclusion, responsive web design is no longer a nice-to-have feature for your business website. It\'s an essential element that can make or break your online presence in 2023. With more and more people using mobile devices to access the internet, it\'s crucial that your website is designed to be responsive and adaptable to different screen sizes and resolutions.\r\n<br>\r\n<br>\r\nA responsive website not only improves the user experience, but it also helps increase mobile traffic, boost search engine rankings, and lower bounce rates. Additionally, a well-designed responsive website can provide your business with a competitive advantage and help you stand out from the crowd.\r\n<br>\r\n<br>\r\nAt FABTECHSOL, we understand the importance of responsive web design and we\'re here to help. Our team of web developers and designers specialize in creating custom, responsive websites that are optimized for mobile devices, fast loading times, and SEO-friendly. Contact us today to learn more about our services and how we can help you stay ahead of the competition with a responsive website.\r\n<h2>Call to Action</h2>\r\nDon\'t let your website fall behind the times in 2023. Contact FABTECHSOL today to learn more about our responsive web design services and how we can help take your online presence to the next level. Whether you need a brand new website or a redesign of your existing site, we have the expertise and experience to create a custom, responsive website that meets your unique needs and goals.\r\n<br>\r\n<br>\r\nVisit our website or give us a call to schedule a consultation with one of our web development experts. Let us help you stay ahead of the competition with a responsive website that\'s optimized for mobile devices, fast loading times, and SEO-friendly. At FABTECHSOL, we\'re committed to helping your business succeed in the digital age.\r\n<br>\r\n<br>\r\nAt FABTECHSOL, we are a leading software development company that specializes in website development services. Our team of experienced web developers and designers are dedicated to creating beautiful, responsive websites that help businesses grow and thrive in the digital landscape. With our custom designs, mobile optimization, fast loading times, and SEO-friendly approach, we are confident that we can provide you with the responsive web design solution that your business needs. Contact us today to learn more about our services and how we can help you stay ahead of the competition with a responsive website.', 'Responsive Web Design', 'Not Having a Responsive Website', 'FABTECHSOL Responsive Web Design Solution', 'Why Responsive Web Design is Essential for Business - fabtechsol', 'Discover why responsive web design is crucial for your business in 2023. Learn about the benefits, elements, and challenges of responsive web design, and find out how FABTECHSOL can help you stay ahead of the competition with our custom, mobile-optimized websites. ', ' https://fabtechsol.com/blog/why-responsive-web-design-is-essential-for-your-business-in-2023/'),
(17, 'How to Optimize Your Website for Voice Search in 2023', '../upload/20230320_112259_Blog-1 (1).jpg', 'Voice search has been gaining traction in recent years, and it\'s not hard to see why. With the rise of digital assistants like Siri, Alexa, and Google Assistant, more and more people are turning to voice search to find what they\'re looking for on the internet. In fact, by 2023, it\'s estimated that half of all searches will be conducted by voice. This means that if you want to stay ahead of the curve and ensure that your website is easily discoverable, you need to optimize it for voice search. In this blog post, we\'ll show you how.\r\n\r\n<h2><b>What is Voice Search?</b></h2>\r\n\r\nFirst, let\'s start with the basics. Voice search is a technology that allows users to conduct searches by speaking to a digital assistant or smart speaker. Instead of typing in a query, users simply say what they\'re looking for, and the assistant returns the most relevant results. Voice search is becoming increasingly popular because it\'s faster, more convenient, and more natural than typing.\r\n\r\n', '../upload/20230320_112259_Blog-2 (1).jpg', '<h2><b>Why Optimize Your Website for Voice Search?</b></h2>\r\n\r\nWith the rise of voice search, it\'s becoming more important than ever to optimize your website for this technology. Here are some of the main reasons why:\r\n<br>\r\n<br>\r\n<b>1.</b> Voice search is growing in popularity. As we mentioned earlier, by 2023, half of all searches will be conducted by voice. If you\'re not optimizing your website for this technology, you\'re missing out on a huge potential audience.\r\n<br>\r\n<br>\r\n<b>2.</b>\r\n Voice search is changing the way people search. When people use voice search, they tend to use longer, more conversational queries. This means that if you want your website to rank well for voice search, you need to optimize your content to match these types of queries.\r\n<br>\r\n<br>\r\n<b>3.</b> \r\nVoice search is more important for local searches. When people use voice search, they\'re often looking for local information. This means that if you\'re a local business, optimizing your website for voice search is crucial for getting found by potential customers.\r\n<br>\r\n<br>\r\nNow that we\'ve established why you need to optimize your website for voice search, let\'s move on to the how.\r\n<br>\r\n<br>\r\n<b>1- Use Conversational Language</b>\r\n<br>\r\n<br>\r\nAs we mentioned earlier, when people use voice search, they tend to use longer, more conversational queries. This means that you need to optimize your content to match these types of queries. To do this, use natural language in your content, and write in a way that\'s easy to understand. Avoid using technical jargon or complex sentences that might confuse your audience.\r\n<br>\r\n<br>\r\n<b>2- Focus on Long-Tail Keywords</b>\r\n<br>\r\n<br>\r\nWhen optimizing your website for voice search, it\'s important to focus on long-tail keywords. These are longer, more specific keyword phrases that people might use when conducting voice searches. For example, instead of targeting the keyword \"car dealership,\" target long-tail keywords like \"best car dealership in [city]\" or \"car dealership with the best service.\" By focusing on long-tail keywords, you\'ll have a better chance of ranking for voice search queries.\r\n<br>\r\n<br>\r\n<b>3- Optimize for Local Search</b>\r\n<br>\r\n<br>\r\nAs we mentioned earlier, voice search is more important for local searches. This means that if you\'re a local business, optimizing your website for local search is crucial. To do this, make sure that your website includes your business\'s name, address, and phone number (NAP) on every page. You should also create a Google My Business page and make sure that your business\'s information is accurate and up-to-date.\r\n<br>\r\n<br>\r\n<b>4- Make Sure Your Website is Mobile-Friendly</b>\r\n<br>\r\n<br>\r\nMany voice searches are conducted on mobile devices, so it\'s important to make sure that your\r\nthe website is mobile-friendly. This means that your website should be designed to be responsive and adjust to different screen sizes, ensuring that it looks and functions well on both smartphones and tablets.\r\n<br>\r\n<br>\r\nHaving a mobile-friendly website is not just important for voice search optimization, but also for overall user experience and search engine rankings. In fact, Google has made mobile-friendliness a key ranking factor in its search algorithm, so having a mobile-friendly website is essential if you want to rank well in search results.\r\n<br>\r\n<br>\r\nTo ensure that your website is mobile-friendly, you should consider implementing a responsive design. Responsive design is a design approach that ensures your website can adjust to different screen sizes, from large desktop monitors to small smartphone screens, without compromising the user experience. Responsive design uses flexible grids and images that can resize based on the device, as well as CSS media queries to adjust the layout and functionality of the website.\r\n<br>\r\n<br>\r\nAnother important aspect of mobile-friendly design is website speed. Mobile users tend to have less patience for slow-loading websites, so it\'s essential to optimize your website for speed. This can include reducing image and file sizes, compressing code, and using caching and content delivery networks (CDNs) to speed up loading times.\r\n<br>\r\n<br>\r\nBy ensuring that your website is mobile-friendly, you can improve your chances of ranking in voice search results and provide a better user experience for mobile users. So, if you haven\'t already, it\'s time to make sure that your website is optimized for mobile devices.\r\n<br>\r\n<br>\r\n<b>5- Use Structured Data</b>\r\n<br>\r\n<br>\r\nStructured data is a type of code that helps search engines better understand the content on your website. By using structured data, you can help search engines provide more informative and visually appealing search results. This is particularly important for voice search, as digital assistants often read out the featured snippets or rich snippets that are generated by structured data.\r\n<br>\r\n<br>\r\n<b>6- Create a FAQ Page</b>\r\n<br>\r\n<br>\r\nCreating a frequently asked questions (FAQ) page is a great way to optimize your website for voice search. When people use voice search, they often ask questions like \"how to\" or \"what is.\" By including a FAQ page on your website that answers these types of questions, you\'ll have a better chance of ranking for these types of queries.\r\n<br>\r\n<br>\r\n<b>7- Optimize Your Website Speed</b>\r\n<br>\r\n<br>\r\nWebsite speed is an important factor in search engine optimization (SEO), and it\'s particularly important for voice search. When people use voice search, they expect quick and accurate answers to their queries. If your website is slow to load or doesn\'t provide the information they\'re looking for, they\'ll quickly move on to the next result. To optimize your website speed, make sure that your website is optimized for mobile devices, compress your images, and use a content delivery network (CDN) to serve your website from servers that are closer to your users.\r\n<br>\r\n<br>\r\n<b>8- Use Natural Language Processing (NLP)</b>\r\n<br>\r\n<br>\r\nNatural language processing (NLP) is a type of artificial intelligence that helps digital assistants better understand and interpret natural language. By using NLP, you can optimize your content to better match the types of queries that people use when conducting voice searches. To use NLP, focus on using natural language in your content, including synonyms and related terms that are commonly used in your industry.\r\n<br>\r\n<br>\r\nIn summary, optimizing your website for voice search in 2023 requires a combination of strategies, including using conversational language, focusing on long-tail keywords, optimizing for local search, using structured data, creating a FAQ page, optimizing your website speed, and using natural language processing. By implementing these strategies, you\'ll have a better chance of ranking for voice search queries and reaching a wider audience.\r\n<br>\r\n<br>\r\n<b>9- Focus on Local Search</b>\r\n<br>\r\n<br>\r\nLocal search is becoming increasingly important in voice search. When people use voice search, they often ask for directions to a nearby location or for recommendations for local businesses. To optimize your website for local search, make sure that your business information is up-to-date and consistent across all online directories and review sites. Additionally, include location-based keywords in your content and use schema markup to provide search engines with additional information about your business.\r\n<br>\r\n<br>\r\n<b>10- Use Long-Tail Keywords</b>\r\n<br>\r\n<br>\r\nAs we mentioned earlier, people tend to use more conversational and long-tail keywords when conducting voice searches. Long-tail keywords are more specific and targeted, and they often have less competition than broader keywords. By using long-tail keywords in your content, you can optimize for more specific and targeted queries, which can help you rank higher in voice search results.\r\n<br>\r\n<br>\r\n<b>11- Optimize for Mobile Devices</b>\r\n<br>\r\n<br>\r\nMobile devices are the primary platform for voice search, so it\'s essential that your website is optimized for mobile devices. This means using a responsive design that adjusts to different screen sizes, optimizing your website speed, and using mobile-friendly features like click-to-call buttons and maps.\r\n<br>\r\n<br>\r\n<b>12- Create a Conversation Flow</b>\r\n<br>\r\n<br>\r\nWhen optimizing your website for voice search, it\'s important to think about how people will interact with your content. Instead of focusing on individual keywords, think about the conversation flow and how your content can provide a comprehensive answer to the user\'s query. This means using natural language, providing context, and anticipating follow-up questions.\r\n<br>\r\n<br>\r\n<b>13- Optimize for Featured Snippets</b>\r\n<br>\r\n<br>\r\nFeatured snippets are the highlighted answer boxes that appear at the top of search results. Digital assistants often read out these snippets when answering voice search queries. To optimize for featured snippets, focus on providing clear and concise answers to common questions and using structured data to mark up your content.\r\n<br>\r\n<br>\r\n<b>14- Monitor Your Analytics</b>\r\n<br>\r\n<br>\r\nAs with any SEO strategy, it\'s important to monitor your website analytics to see how your voice search optimization efforts are performing. Keep track of your rankings for voice search queries, monitor your website traffic and engagement metrics, and use this data to adjust your strategy over time.\r\n<br>\r\n<br>\r\nIn conclusion, optimizing your website for voice search in 2023 requires a multi-faceted approach that focuses on conversational language, long-tail keywords, local search, mobile optimization, conversation flow, featured snippets, and analytics monitoring. By implementing these strategies, you can improve your chances of ranking in voice search results and reaching a wider audience.', '../upload/20230320_112259_Blog-3 (1).jpg', '<h2><b>Empowering Your Online Presence with FabTechSol\'s Voice Search Optimization Services</b></h2>\r\n\r\nAt <a href=\"https://fabtechsol.com/\">FabTechSol</a>, we specialize in <a href=\"https://fabtechsol.com/web-dev-service.php\">website development</a> and design, <a href=\"https://fabtechsol.com/software-dev-service\">software development</a>, and  <a href=\"https://fabtechsol.com/ui-ux-service\">UI/UX design</a>. Our team of experts is dedicated to providing cutting-edge solutions that help our clients succeed in today\'s digital landscape. With the rise of voice search in 2023, optimizing your website for this technology is more important than ever, and our services are designed to help you do just that.\r\n<br>\r\n<br>\r\nOur <a href=\"https://fabtechsol.com/web-dev-service.php\">website development</a> and design services are focused on creating websites that are both visually appealing and optimized for search engines. We use the latest technologies and techniques to ensure that your website is fast, responsive, and optimized for <a href=\"https://fabtechsol.com/app-dev-service\">mobile</a> devices. By incorporating best practices for voice search optimization into our design process, we can help you improve your chances of ranking in voice search results.\r\n<br>\r\n<br>\r\nOur <a href=\"https://fabtechsol.com/software-dev-service\">software development services</a> are focused on creating custom solutions that are tailored to your specific needs. Whether you need a custom app or software to help you manage your business, we can develop a solution that meets your requirements. Our team is experienced in developing software that is optimized for voice search, and we can help you integrate this technolo  are focused on creating user experiences that are intuitive and user-friendly. We use a variety of techniques to ensure that your website or app is easy to navigate and optimized for voice search. From designing conversational interfaces to incorporating natural language processing, our team can help you create a user experience that is optimized for voice search and otgy into your products and services.\r\n<br>\r\n<br>\r\nFinally, our <a href=\"https://fabtechsol.com/ui-ux-service\">UI/UX design services</a>her emerging technologies.\r\n<br>\r\n<br>\r\nAt <a href=\"https://fabtechsol.com/\">FabTechSol</a>, we\'re committed to helping our clients stay ahead of the curve when it comes to emerging technologies like voice search. With our expertise in website development and design, <a href=\"https://fabtechsol.com/software-dev-service\">software development </a>, and  <a href=\"https://fabtechsol.com/ui-ux-service\">UI/UX design</a>, we can help you optimize your digital presence for voice search and other emerging technologies.\r\n', 'lorm', 'lorm', 'lorm', 'Voice Search Optimization in 2023 | FABTECHSOL', 'Stay ahead of the game with FabTechSol\'s voice search optimization services. Our expert team can help you optimize your website for voice search in 2023 and beyond. Empower your online presence with our cutting-edge solutions for website development, software development, and UI/UX design.', 'lorm');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(18, 'The Importance of Website Security: Protecting Your Business and Your Customers', '../upload/20230321_135930_Blog-001.jpg', 'In today\'s digital age, having a website is crucial for any business. Not only does it provide a platform to showcase your products or services, but it also enables you to reach a wider audience and increase your customer base. However, with the rise of cyber threats and data breaches, website security has become a major concern for businesses of all sizes. In this blog, we will discuss the importance of website security and how it can help protect your business and your customers.\r\n', '../upload/20230321_135930_Blog-002.jpg', '<h2><b>Why is Website Security Important?</b></h2>\r\n\r\n<b>1- Protects Your Business from Cyber Attacks</b>\r\n<br>\r\n<br>\r\nA website is like a storefront for your business, and just like any physical store, it is vulnerable to theft and vandalism. In the digital world, cyber attacks such as hacking, malware, and phishing are some of the most common forms of theft. These attacks can not only damage your website and steal sensitive information but can also harm your business reputation and result in financial losses.\r\n<br>\r\n<br>\r\nInvesting in website security measures such as firewalls, encryption, and regular software updates can help prevent cyber attacks and protect your business from potential threats.\r\n<br>\r\n<br>\r\n<b>2- Ensures Trust with Your Customers</b>\r\n<br>\r\n<br>\r\nIn addition to protecting your business, website security also plays a vital role in building trust with your customers. When customers visit your website, they expect their personal information to be safe and secure. If your website is not secure and customers\' information is compromised, it can lead to a loss of trust and loyalty, which can be detrimental to your business.\r\n<br>\r\n<br>\r\nBy implementing website security measures, you can demonstrate to your customers that their safety is a top priority, and they can trust your business to handle their information with care.\r\n<br>\r\n<br>\r\n<b>3- Compliance with Data Protection Regulations</b>\r\n<br>\r\n<br>\r\nMany countries have data protection regulations in place to ensure that businesses protect their customers\' personal information. Failure to comply with these regulations can result in legal penalties and fines. For example, in the European Union, the General Data Protection Regulation (GDPR) requires businesses to protect personal data and notify customers in the event of a data breach.\r\n<br>\r\n<br>\r\nBy investing in website security measures, you can ensure that your business complies with these regulations and avoids any legal consequences.\r\nWebsite Security Measures\r\n<br>\r\n<br>\r\n<b>Use HTTPS Encryption</b> \r\nHTTPS (Hypertext Transfer Protocol Secure) is a protocol for secure communication over the internet. It ensures that any data exchanged between the website and the user is encrypted and cannot be intercepted by third parties. By implementing HTTPS encryption, you can protect your website from cyber attacks such as man-in-the-middle attacks and eavesdropping.\r\n<br>\r\n<br>\r\n<b>Install a Firewall</b>\r\nA firewall is a security system that monitors and controls incoming and outgoing network traffic. It can help prevent unauthorized access to your website and block malicious traffic such as DDoS attacks. By installing a firewall, you can strengthen your website security and protect it from potential threats.\r\n<br>\r\n<br>\r\n<b>Regularly Update Your Software</b>\r\nSoftware updates often contain security patches and bug fixes that address vulnerabilities in the system. Failure to update your software can leave your website vulnerable to cyber attacks. By regularly updating your software, you can ensure that your website is protected against the latest threats and vulnerabilities.\r\n<br>\r\n<br>\r\n<b>Implement Two-Factor Authentication</b>\r\nTwo-factor authentication (2FA) is a security process that requires users to provide two forms of identification before accessing their account. This can include a password and a one-time code sent to their phone or email. By implementing 2FA, you can prevent unauthorized access to your website and protect your customers\' sensitive information.\r\n<br>\r\n<br>\r\nIn conclusion, website security is essential for protecting your business and your customers. It can help prevent cyber attacks, build trust with your customers, and ensure compliance with data protection regulations. By implementing website security measures such as HTTPS encryption, firewalls, regular software updates, and two-factor authentication, you can strengthen your website security and protect it from potential threats.\r\n<br>\r\n<br>\r\nIt is important to note that website security is not a one-time investment but an ongoing process. As cyber threats continue to evolve and become more sophisticated, it is essential to keep up-to-date with the latest security measures and regularly review and update your website security.\r\n<br>\r\n<br>\r\nIn addition to implementing website security measures, it is also important to educate your employees and customers on website security best practices. This can include creating strong passwords, avoiding suspicious emails and links, and regularly reviewing their account activity.\r\nOverall, website security is a critical aspect of any business\'s online presence. By prioritizing website security and implementing the necessary measures, you can protect your business, your customers, and their sensitive information.\r\n<br>\r\n<br>\r\nWebsite security is crucial for many reasons. First and foremost, it helps to protect your business and your customers from potential cyber threats. As more and more business transactions take place online, the risk of cyber-attacks has increased significantly. These attacks can compromise your website\'s integrity, steal sensitive information, and damage your business\'s reputation.\r\n<br>\r\n<br>\r\nA breach in website security can result in a loss of customer data such as passwords, credit card information, and personal information, leading to identity theft and financial fraud. This not only puts your customers at risk but can also expose your business to legal action and regulatory penalties.\r\n<br>\r\n<br>\r\nMoreover, website security is essential for maintaining customer trust and loyalty. When customers visit your website, they expect it to be safe and secure. If your website is compromised, it can lead to a loss of trust and confidence, resulting in customers looking for alternative options. This can be detrimental to your business\'s reputation and bottom line.\r\n<br>\r\n<br>\r\nIn addition to protecting your customers, website security also protects your business from financial losses. Cyber-attacks can result in significant financial losses due to lost revenue, legal fees, and other costs associated with recovering from a security breach. Implementing website security measures can help minimize the risk of cyber-attacks and reduce the likelihood of financial losses.\r\n<br>\r\n<br>\r\nFurthermore, website security is essential for maintaining your website\'s performance and functionality. Cyber-attacks can cause your website to slow down or crash, leading to a poor user experience and lost business opportunities. By implementing website security measures, you can ensure that your website is running smoothly and efficiently, providing your customers with a seamless experience.\r\n<br>\r\n<br>\r\nIn conclusion, website security is a critical aspect of any business\'s online presence. By prioritizing website security and implementing the necessary measures, you can protect your business, your customers, and their sensitive information. It helps to maintain customer trust and loyalty, minimize the risk of financial losses, and ensure that your website is running smoothly and efficiently.\r\n<br>\r\n<br>\r\nMoreover, website security is not only important for protecting your customers and your business, but it is also necessary for compliance with various industry regulations and standards. Depending on the type of data your website handles, you may be required to comply with regulations such as HIPAA, PCI DSS, and GDPR. These regulations have specific requirements for data security and privacy, and failing to comply can result in hefty fines and legal action.\r\n<br>\r\n<br>\r\nAnother reason why website security is crucial is that it helps to prevent website downtime and disruptions. Cyber-attacks can cause your website to become unavailable, leading to lost business opportunities and damage to your brand\'s reputation. This is particularly true for e-commerce businesses that rely on their websites for sales and customer interactions. By implementing website security measures, you can minimize the risk of downtime and ensure that your website is available to customers at all times.\r\n<br>\r\n<br>\r\nAdditionally, website security is essential for protecting your intellectual property and proprietary information. Cybercriminals can steal your trade secrets, business plans, and other sensitive information, causing significant damage to your business. Website security measures such as firewalls and encryption can help prevent unauthorized access and protect your valuable assets.\r\nIn conclusion, website security is critical for protecting your business, your customers, and your valuable assets. It helps to prevent cyber-attacks, maintain customer trust and loyalty, comply with regulations, prevent website downtime, and protect your intellectual property. As cyber threats continue to evolve, it is essential to stay up-to-date with the latest security measures and implement them to protect your website and your business.\r\n', '../upload/20230321_135930_Blog-003.jpg', '<h2><b>Customized Software Solutions: Empowering Businesses with Fabtechsol\'s Expertise</b></h2>\r\n<a href=\"https://fabtechsol.com/\">Fabtechsol</a> is a <a href=\"https://fabtechsol.com/software-dev-service\">software development</a> company that provides cutting-edge solutions to businesses of all sizes. With a team of experienced developers and designers, we specialize in developing custom software applications, <a href=\"https://fabtechsol.com/app-dev-service\">mobile apps</a> , and web solutions that cater to our clients\' unique needs and requirements.\r\n<br>\r\n<br>\r\nWe understand that every business is different, and therefore, we offer tailored software solutions that align with our clients\' business objectives. From startups to enterprises, we have worked with a wide range of businesses across various industries, including healthcare, finance, and <a href=\"https://fabtechsol.com/web-dev-service.php\">e-commerce</a> , to name a few.\r\n<br>\r\n<br>\r\nAt <a href=\"https://fabtechsol.com/\">Fabtechsol</a>, we are committed to delivering high-quality <a href=\"https://fabtechsol.com/software-dev-service\">software solutions</a> that meet the industry\'s best standards. We follow a robust development process that includes requirements gathering, design, development, testing, and deployment to ensure that our clients receive a fully functional and bug-free software application.\r\n<br>\r\n<br>\r\nOur team of experts stays up-to-date with the latest technology trends and industry best practices to provide our clients with innovative and reliable solutions. We also use agile development methodologies to ensure that our clients\' <a href=\"https://fabtechsol.com/software-dev-service\">software development</a> projects are delivered on time and within budget.\r\n<br>\r\n<br>\r\nIn addition to software development, we also offer maintenance and support services to ensure that our clients\' software applications continue to run smoothly and efficiently. We provide 24/7 technical support, bug fixes, and regular software updates to ensure that our clients\' software applications are always up-to-date and secure.\r\n<br>\r\n<br>\r\nIn conclusion, Fabtechsol is a trusted <a href=\"https://fabtechsol.com/\">software development company</a> that provides custom software solutions to businesses of all sizes. With a focus on quality, innovation, and customer satisfaction, we are committed to delivering software solutions that meet our clients\' unique needs and help them achieve their business objectives.', ' Importance of Website Security', 'Why is Website Security Important', 'Customized Software Solutions with fabtechsol Expertise', 'The Importance of Website Security |  Protecting Your Business - fabtechsol', 'Learn why website security is crucial for your business and customers. Discover how Fabtechsol\'s software solutions and security measures can safeguard your online presence.', 'https://fabtechsol.com/blog/the-importance-of-website-security-protecting-your-business/'),
(19, 'The Benefits of Custom Website Development for Small Businesses', '../upload/bb-1.jpg', '<h2><b>1- Brand Recognition:</b></h2>\r\n\r\nOne of the primary benefits of custom website development for small businesses is increased brand recognition. A custom-designed website allows you to showcase your brand in a unique and visually appealing way, helping you stand out from competitors. Here are a few ways custom website development can help improve your brand recognition:\r\n<br>\r\n<br>\r\n<b>a. Unique Design:</b>\r\nWith a custom website, you have complete control over the design, allowing you to create a site that reflects your brand\'s personality and values. This unique design can help your website stand out from the thousands of other websites out there, making it easier for potential customers to remember your brand.  Unique design is an essential component of a custom website. It involves creating a visual identity that is distinct from other websites and tailored to the needs and preferences of the business and its target audience.  \r\na custom-designed website allows for more flexibility in design, and can often result in a more visually appealing and engaging site.\r\n<br>\r\n<br>\r\nHaving a unique design can help small businesses stand out from their competitors and establish a memorable brand identity. It can also help businesses create a professional image and convey their values and mission through design elements such as color schemes, fonts, and imagery.\r\n<br>\r\n<br>\r\n<b>b. Consistent Branding:</b>\r\nA custom website also allows you to ensure consistent branding throughout your site. This includes using the same color scheme, typography, and imagery, which can help reinforce your brand\'s identity and make it more recognizable to customers.\r\nc. Improved Credibility: A well-designed custom website can also help improve your business\'s credibility. A professional-looking website can help establish trust with potential customers, making them more likely to do business with you.\r\n<br>\r\n<br>\r\nConsistent branding is an important aspect of custom website development for small businesses. It involves creating a cohesive visual identity that is consistent across all marketing channels, including the website, social media, print materials, and more. By maintaining consistent branding, small businesses can establish a strong and recognizable brand identity that resonates with their target audience.\r\n<br>\r\n<br>\r\nA custom website can help small businesses establish consistent branding by incorporating key design elements such as logos, color schemes, typography, and imagery. These elements should be used consistently throughout the website, as well as across other marketing channels. Having consistent branding can help small businesses establish trust with their customers and improve brand recognition. When customers encounter a consistent brand identity across multiple touchpoints, they are more likely to remember the brand and perceive it as trustworthy and reliable.\r\n<h2><b>2- Improved User Experience:</b></h2>\r\nAnother benefit of custom website development is improved user experience. By tailoring your website to your business\'s unique needs, you can create a more engaging and user-friendly experience for your customers. Here are a few ways custom website development can improve your user experience:\r\n<br>\r\n<br>\r\n<b>a. Tailored to Your Business:</b>\r\n A custom website is tailored to your business\'s unique needs, allowing you to create a site that meets the specific needs of your customers. This can include features like online appointment booking, e-commerce functionality, or interactive tools that make it easier for customers to engage with your brand.\r\n<br>\r\n<br>\r\nA custom website that is tailored to a small business can provide a number of benefits over a template-based website. One of the main advantages is the ability to design a website that is uniquely suited to the business\'s specific needs, goals, and audience.\r\n<br>\r\n<br>\r\nTailoring a custom website to a small business involves taking into account a number of factors, such as the business\'s industry, target audience, brand identity, and marketing goals. By understanding these factors, a website development team can design a website that is optimized to achieve the business\'s objectives and meet the needs of its target audience.\r\n<br>\r\n<br>\r\nFor example, a custom website for a small e-commerce business might feature specific product categories, advanced search functionality, and a user-friendly checkout process. In contrast, a custom website for a small professional services firm might include detailed information about the firm\'s expertise, client testimonials, and a clear call-to-action for potential clients to contact the firm.\r\n<br>\r\n<br>\r\n<b>b. Faster Load Times:</b>\r\nA custom website can also help improve load times, which is critical for user experience. With faster load times, your site will be more responsive, making it easier for users to navigate and find what they\'re looking for.\r\n<br>\r\n<br>\r\nOne of the primary benefits of faster load times is improved user experience. When a website loads quickly, users are less likely to become frustrated and leave the site before engaging with its content. This can improve customer retention and ultimately drive business growth.\r\n<br>\r\n<br>\r\n<b>c. User-Friendly Navigation:</b>\r\n<br>\r\n<br>\r\n A custom website can also help improve navigation, making it easier for users to find the information they need. By simplifying your site\'s navigation and organizing content in a logical way, you can create a more intuitive user experience that encourages users to stay on your site longer.\r\n<br>\r\n<br>\r\nThere are several key design elements that can contribute to a user-friendly navigation experience on a custom website. These include\r\n<br>\r\n<br>\r\n<b>1.</b>\r\nClear and consistent navigation menus: Navigation menus should be easy to find and use, with clear and concise labels that accurately describe the pages or sections they link to. Navigation menus should also be consistent across all pages of the website, with the same placement and design.\r\n<br>\r\n<br>\r\n<b>2.</b>\r\nSimple and intuitive design: The website design should be intuitive and easy to understand, with clear visual cues that guide users to the information they need. This includes using familiar design patterns, such as clickable buttons and links, and avoiding cluttered or confusing layouts.\r\n<br>\r\n<br>\r\n<b>3. </b>\r\nSearch functionality: Search functionality can help users quickly find the information they need, especially on larger or more complex websites. The search bar should be prominently placed and easy to use, with accurate and relevant search results.\r\n<br>\r\n<br>\r\n<b>4.</b>\r\nMobile responsiveness: With an increasing number of users accessing websites on mobile devices, it\'s important to ensure that the website design is mobile-responsive. This means that the website should be optimized for smaller screens, with easy-to-use', '../upload/bb-2.jpg', '<h2><b>Better Search Engine Optimization (SEO):</b></h2>\r\nFinally, custom website development can help improve your search engine optimization (SEO), making it easier for potential customers to find your site. Here are a few ways custom website development can help improve your SEO:\r\n<br>\r\n<br>\r\n<b>a. Customized Content:</b>\r\nWith a custom website, you can create content that\'s tailored to your business\'s unique needs, including keywords and phrases that are relevant to your industry. This can help improve your site\'s search engine rankings and make it more likely that potential customers will find your site when searching for products or services like yours.\r\nOne of the advantages of customized content is the ability to showcase the unique aspects of a small business. By creating content that is tailored to the business and its target audience, small businesses can highlight their unique selling points, showcase their products or services, and establish their expertise in their industry.\r\n<br>\r\n<br>\r\nCustomized content can also help small businesses improve their search engine optimization (SEO) efforts. By incorporating relevant keywords and phrases into the website content, small businesses can improve their search engine rankings and attract more organic traffic to their website.\r\n<br>\r\n<br>\r\nWhen working with a website development team, small businesses can collaborate to create customized content that aligns with their brand and meets their specific needs. This can involve developing a content strategy that outlines the types of content that will be included on the website, as well as the tone and style of the content.\r\n<br>\r\n<br>\r\n<b>b.</b>\r\nA well-designed custom website can also improve your site\'s architecture, making it easier for search engines to crawl and index your pages. This includes optimizing your site\'s URLs, title tags, and meta descriptions, as well as ensuring that your site\'s content is organized in a logical way.\r\n<br>\r\n<br>\r\nImproved site architecture can also impact SEO, as search engines prioritize websites that are well-organized and easy to navigate. A custom website can be designed with SEO in mind, using techniques such as keyword research, meta descriptions, and schema markup to improve search engine rankings and drive more organic traffic to the site.\r\n<br>\r\n<br>\r\nIn addition to SEO, improved site architecture can also lead to better user engagement and conversion rates. A well-organized website that is easy to navigate can encourage users to spend more time on the site and explore more pages, which can increase the likelihood of them taking action, such as making a purchase or filling out a contact form.\r\n<br>\r\n<br>\r\nWhen working with a website development team, small businesses can collaborate to ensure that their site architecture is optimized for their specific goals and target audience. This may involve conducting user testing to identify pain points and areas for improvement, as well as implementing design elements that are proven to enhance user engagement and conversion rates.\r\n<br>\r\n<br>\r\n<b>c.</b> \r\nFinally, a custom website can also help improve your site\'s mobile responsiveness, which is critical for SEO. With more and more users accessing the web from mobile devices, having a site that\'s optimized for mobile can help improve your search engine rankings and make it easier for potential customers to find your site.\r\n<br>\r\n<br>\r\nMobile responsiveness refers to the ability of a website to adapt to different screen sizes and device types. A custom-designed website can be optimized for mobile devices by incorporating responsive design principles, which involve designing the website in a way that allows it to resize and reformat itself to fit different screen sizes.\r\n<br>\r\n<br>\r\nThere are a few key design elements that can improve mobile responsiveness. These include:\r\n<br>\r\n<br>\r\n<b>1.</b>\r\nScalable images: Images that can be resized and optimized for different screen sizes without losing quality.\r\n<br>\r\n<br>\r\n<b>2.</b>\r\nSimplified navigation: Navigation that is easy to use and accessible on mobile devices.\r\n<br>\r\n<br>\r\n<b>3.</b>\r\nLarge, legible font: Font that is easy to read on small screens.\r\n<br>\r\n<br>\r\n<b>4.</b>\r\nMinimal use of pop-ups and interstitials: Pop-ups and interstitials can be difficult to navigate on mobile devices and can detract from the user experience.\r\n<br>\r\n<br>\r\nWhen working with a website development team, small businesses can collaborate to ensure that their website design is optimized for mobile devices. This may involve creating a mobile-specific version of the website, or incorporating responsive design principles into the overall website design', '../upload/bb-3.jpg', '<h2><b>Transform Your Online Presence with FabTechSol\'s Custom Website Development Services</b></h2>\r\nFabTechSol is a leading provider of custom website development services for small businesses. With years of experience in the industry, our team of expert designers and developers can create a unique and visually appealing website that aligns with your brand and meets your specific needs.\r\n<br>\r\n<br>\r\nOne of the key benefits of working with FabTechSol is our commitment to consistent branding. We understand that a strong and recognizable brand identity is essential for small businesses, and we work closely with our clients to ensure that their website design aligns with their overall branding strategy. This includes incorporating key design elements such as logos, color schemes, typography, and imagery, and maintaining a consistent tone of voice and messaging across all marketing channels.\r\n<br>\r\n<br>\r\nAt FabTechSol, we also understand the importance of user experience. A well-designed website can improve user engagement and ultimately drive conversions. That\'s why we prioritize usability and navigation in our custom website development projects. Our team of expert developers will ensure that your website is easy to navigate and find the information users need, leading to a positive user experience and improved customer retention.\r\n<br>\r\n<br>\r\nIn addition to website development, FabTechSol also offers search engine optimization (SEO) services. We understand that a website is only effective if it can be found by potential customers, and our team of SEO experts can help improve your website\'s search engine rankings through strategic optimization techniques.\r\n<br>\r\n<br>\r\nOverall, at FabTechSol, our goal is to provide small businesses with the custom website development services they need to succeed. With our commitment to consistent branding and user experience, as well as our expertise in SEO, we can help small businesses establish a strong online presence and drive business growth.', 'Custom Website Development for Small Businesses', 'Better Search Engine Optimization ', 'FabTechSol\'s Custom Website Development Services', 'Custom Website Development for Small Businesses | fabtechsol', 'Transform your online presence with FabTechSol\'s custom website development services. Discover unique design, consistent branding, and expert user experience for your small business growth', 'https://fabtechsol.com/blog/custom-website-development-for-small-businesses/'),
(20, '5 Common Mistakes to Avoid When Designing Your Website', '../upload/20230321_160735_Blog-01 (2).jpg', '<b>1- Neglecting Mobile Responsiveness</b>\r\n<br>\r\n<br>\r\nMore and more people are accessing the internet through their smartphones, making mobile responsiveness a crucial aspect of website design. Neglecting mobile responsiveness can be a costly mistake. Your website may appear distorted or difficult to navigate on a smaller screen, which can turn visitors away.\r\n<br>\r\n<br>\r\nTo avoid this mistake, it\'s essential to design your website with a mobile-first approach. This means designing your website for smaller screens first and then scaling up for larger screens. Use responsive design elements that adjust to different screen sizes and optimize images and videos for faster loading times on mobile devices.\r\n<br>\r\n<br>\r\nMobile responsiveness means designing your website to automatically adjust to different screen sizes and resolutions. This includes using responsive design elements like flexible images, text, and grids, and ensuring that navigation menus and buttons are easy to use on smaller screens. Responsive design also involves optimizing images and videos for faster loading times on mobile devices, as slow loading times can frustrate users and cause them to abandon your website.\r\n<br>\r\n<br>\r\nTo ensure your website is mobile-responsive, it\'s important to test it on different devices and screen sizes. This can be done manually by accessing your website on different devices or by using tools like Google\'s Mobile-Friendly Test or BrowserStack.\r\n<br>\r\n<br>\r\n<b>2- Overcomplicating Navigation</b>\r\n<br>\r\n<br>\r\nThe navigation menu of your website is one of the most critical elements of user experience. If visitors cannot find what they are looking for quickly, they are likely to leave your website. Overcomplicating navigation can confuse visitors and lead to a high bounce rate.\r\n<br>\r\n<br>\r\nTo avoid this mistake, keep your navigation menu simple and intuitive. Limit the number of menu items to no more than seven, and make sure they are organized logically. Use clear and concise labels for your menu items, and include a search bar to make it easy for visitors to find what they\'re looking for.\r\n<br>\r\n<br>\r\nA clear and simple navigation menu is essential for ensuring that visitors can find what they\'re looking for on your website. Overcomplicating navigation can confuse visitors and make it challenging for them to find the information they need.\r\n<br>\r\n<br>\r\nWhen designing your navigation menu, it\'s important to keep it simple and intuitive. This means limiting the number of menu items to no more than seven and organizing them logically. Use clear and concise labels for your menu items, and consider using submenus or dropdown menus to organize related content.\r\n<br>\r\n<br>\r\nIt\'s also essential to ensure that your navigation menu is easy to use on both desktop and mobile devices. This means designing your menu to be visible and accessible from every page of your website and ensuring that it\'s easy to navigate with a finger or mouse.\r\n<br>\r\n<br>\r\n<b>3- Using Too Many Fonts and Colors</b>\r\n<br>\r\n<br>\r\nWhile it may be tempting to use a variety of fonts and colors to make your website stand out, this can actually have the opposite effect. Using too many fonts and colors can make your website appear cluttered and unprofessional.\r\n<br>\r\n<br>\r\nTo avoid this mistake, limit yourself to no more than three fonts and a color palette of no more than five colors. Choose fonts that are easy to read and complement each other well. Use colors that match your brand identity and are easy on the eyes.\r\n<br>\r\n<br>\r\nUsing too many fonts and colors can make your website appear cluttered and unprofessional. It can also make it difficult for visitors to read your content and can detract from your website\'s overall design.\r\n<br>\r\n<br>\r\nWhen choosing fonts and colors for your website, it\'s important to limit yourself to a few well-chosen options. This means selecting no more than three fonts and a color palette of no more than five colors. Choose fonts that are easy to read and complement each other well, and use colors that match your brand identity and are easy on the eyes.\r\n<br>\r\n<br>\r\nIt\'s also important to ensure that your fonts and colors are consistent throughout your website. This means using the same font and color scheme for your headings, subheadings, and body text, and ensuring that your website\'s background color or image doesn\'t clash with your font and color choices.\r\n<br>\r\n<br>\r\n<b>4- Ignoring Website Speed</b>\r\n<br>\r\n<br>\r\nWebsite speed is another critical aspect of user experience. Visitors expect your website to load quickly, and if it doesn\'t, they\'re likely to leave and never come back. Ignoring website speed can also negatively impact your search engine rankings.\r\n<br>\r\n<br>\r\nTo avoid this mistake, optimize your website for speed by compressing images, minifying code, and using a content delivery network (CDN). Use a caching plugin to improve load times, and test your website speed regularly to identify and fix any issues.\r\n<br>\r\n<br>\r\nWebsite speed is a critical aspect of user experience. Slow loading times can frustrate visitors and cause them to abandon your website. They can also negatively impact your search engine rankings, as search engines like Google prioritize websites that load quickly.\r\n<br>\r\n<br>\r\nTo ensure that your website loads quickly, it\'s essential to optimize it for speed. This involves compressing images, minifying code, and using a content delivery network (CDN) to deliver content quickly to users all over the world. It also involves using a caching plugin to improve load times and ensuring that your website\'s code is clean and streamlined.\r\n<br>\r\n<br>\r\nThere are several tools available to help you test your website\'s speed, including Google\'s PageSpeed Insights, GTmetrix, and Pingdom. These tools can help you identify areas for improvement and give you specific recommendations for optimizing your website\'s speed.', '../upload/20230321_160735_Blog-02 (2).jpg', '<b>5- Neglecting SEO</b>\r\n<br>\r\n<br>\r\nSearch engine optimization (SEO) is essential for driving organic traffic to your website. Neglecting SEO can result in low search engine rankings, making it difficult for potential visitors to find your website.\r\n<br>\r\n<br>\r\nTo avoid this mistake, optimize your website for SEO by using relevant keywords in your content, meta descriptions, and title tags. Use descriptive alt text for images, and make sure your website has a clear hierarchy of headings. Ensure that your website is mobile-friendly, and use internal and external links to improve your website\'s authority.\r\n<br>\r\n<br>\r\nSearch engine optimization (SEO) is essential for driving organic traffic to your website. Neglecting SEO can result in low search engine rankings, making it difficult for potential visitors to find your website.\r\n<br>\r\n<br>\r\nTo ensure that your website is optimized for search engines, it\'s important to conduct keyword research and use those keywords throughout your website\'s content. This includes using keywords in your website\'s meta titles and descriptions, as well as in your headings and body text.\r\n<br>\r\n<br>\r\nIt\'s also important to ensure that your website\'s structure and navigation are optimized for search engines. This means using clear and concise URLs, optimizing your website\'s images with descriptive alt text, and ensuring that your website\'s code is clean and properly formatted.\r\nAnother important aspect of SEO is link building. This involves acquiring high-quality backlinks to your website from other reputable websites. Backlinks can improve your website\'s search engine rankings and drive more traffic to your website.\r\n\r\n', '../upload/20230321_160735_Blog-03 (2).jpg', '<h2><b>FABTECHSOL Custom Web Design Services for Businesses of All Sizes</b></h2>\r\nFabTechSol is a leading software development company that offers a range of web design services to businesses of all sizes. With a team of highly skilled and experienced web designers, we specialize in creating custom websites that are not only visually appealing but also functionally efficient.\r\n<br>\r\n<br>\r\nWe understand that every business has unique requirements and goals, and that\'s why we tailor our web design services to meet the specific needs of our clients. Our team works closely with clients to understand their brand identity, target audience, and business objectives, to create websites that not only look great but also drive results.\r\n<br>\r\n<br>\r\nOur web design services include everything from simple brochure-style websites to complex e-commerce platforms. We use the latest technologies and design trends to create modern, responsive websites that are optimized for search engines and mobile devices. Our websites are not only visually stunning but also user-friendly, ensuring that your customers have a positive experience when browsing your site.\r\n<br>\r\n<br>\r\nAt FabTechSol, we believe in delivering high-quality web design services that are affordable and cost-effective. Our goal is to help businesses establish a strong online presence and achieve their business objectives through their website. If you\'re looking for a reliable and professional web design service provider, look no further than FabTechSol. Contact us today to learn more about our web design services and how we can help your business grow online.\r\n<br>\r\n<br>\r\nAt Fabtechsol, we believe in providing our clients with unique and personalized web designs that can help them stand out from their competitors. We take into consideration our clients\' business needs, target audience, and brand identity to create a custom design that is both visually appealing and functional.\r\n<br>\r\n<br>\r\nOur team of expert designers uses the latest technologies and trends in web design to deliver high-quality, responsive, and user-friendly websites. Whether you need a simple brochure website or a complex e-commerce platform, we have the skills and experience to deliver a website that meets your business goals.\r\n<br>\r\n<br>\r\nIn addition to web design, we also offer website redesign services to update your existing website and make it more modern, user-friendly, and optimized for search engines. We also provide ongoing website maintenance and support services to ensure that your website remains up-to-date, secure, and optimized for performance.\r\n<br>\r\n<br>\r\nAt Fabtechsol, we are committed to providing our clients with the best web design services possible. We work closely with our clients to understand their business goals and create a website that meets their unique needs. Contact us today to learn more about our web design services and how we can help your business grow online.', 'Mistakes to Avoid When Designing website ', '5 Common website designing Mistakes', 'FABTECHSOL Custom Web Design Services', '5 Common Mistakes to Avoid When Designing | fabtechsol', 'Designing a website requires careful planning and attention to detail. Avoid these common mistakes to ensure your website is effective, user-friendly, etc.', 'https://fabtechsol.com/blog/5-common-mistakes-to-avoid-when-designing/');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(21, 'Website Design vs. DIY Platforms: Which is Right for Your Business?', '../upload/20230322_131539_Blog--1.jpg', 'In today\'s digital age, having a website is crucial for businesses of all sizes. A well-designed website can help you establish your online presence, reach out to potential customers, and drive sales. However, when it comes to website design, business owners often face a dilemma: should they hire a professional web designer or use a DIY website builder? In this blog post, we\'ll compare website design vs. DIY platforms and help you decide which option is right for your business.\r\n\r\n<h2><b>What is Website Design?</b></h2>\r\n\r\nWebsite design refers to the process of creating a website from scratch. This involves designing the layout, selecting the color scheme, creating the graphics and images, and writing the content. Website designers use a variety of tools and software to create a custom website that meets the unique needs of the business.\r\n\r\n<h2><b>What are DIY Platforms?</b></h2>\r\n\r\nDIY platforms, on the other hand, are website builders that allow users to create a website on their own without any technical skills or knowledge. These platforms provide pre-designed templates and drag-and-drop tools that make it easy for anyone to create a website in a matter of hours.\r\n', '../upload/20230322_131539_Blog-2 (2).jpg', '<h2><b>Main Differences between Website Design and DIY Platforms</b></h2>\r\n<b>1- Customization</b>\r\n<br>\r\n<br>\r\nOne of the main differences between website design and DIY platforms is customization. With website design, you have complete control over every aspect of your website, from the layout to the color scheme to the graphics and images. This allows you to create a unique website that stands out from the competition.\r\n<br>\r\nOn the other hand, DIY platforms offer limited customization options. While you can choose from a variety of pre-designed templates, you may not be able to customize the design as much as you would like. This can result in a website that looks similar to other businesses using the same template.\r\n<br>\r\n<br>\r\n<b>2- Technical Expertise</b>\r\n<br>\r\n<br>\r\nAnother difference between website design and DIY platforms is technical expertise. Website design requires a high level of technical skill and knowledge. A website designer must be proficient in coding languages such as HTML, CSS, and JavaScript, as well as graphic design software such as Adobe Photoshop and Illustrator.\r\n<br>\r\nDIY platforms, on the other hand, require little to no technical expertise. The templates and drag-and-drop tools make it easy for anyone to create a website without any coding or design skills. This makes DIY platforms a good option for business owners who don\'t have the budget to hire a professional web designer.\r\n<br>\r\n<br>\r\n<b>3- Time and Cost</b>\r\n<br>\r\n<br>\r\nWebsite design is a time-consuming and expensive process. A custom website can take several weeks or even months to design and develop, depending on the complexity of the project. Additionally, hiring a professional web designer can be costly, with prices ranging from a few thousand dollars to tens of thousands of dollars.\r\n<br>\r\nDIY platforms, on the other hand, are much faster and cheaper. With pre-designed templates and drag-and-drop tools, you can create a website in a matter of hours. The cost of DIY platforms is also much lower than website design, with some platforms offering free plans and others charging a monthly fee.\r\n<br>\r\n<br>\r\n<b>4- Consider Your Business Needs</b>\r\n<br>\r\n<br>\r\nWhen deciding between website design and DIY platforms, it\'s important to consider your business needs. If you run a large e-commerce website that requires complex functionality, custom integrations, and a high level of security, then website design may be the better option. A professional web designer can create a website that meets your specific needs and ensures that your website is secure and reliable.\r\n<br>\r\nOn the other hand, if you run a small business that simply needs a basic website to establish an online presence, then a DIY platform may be the better option. With pre-designed templates and drag-and-drop tools, you can create a website quickly and easily without spending a lot of money.\r\n<br>\r\n<br>\r\n<b>5- Evaluate Your Timeframe</b>\r\n<br>\r\n<br>\r\nAnother important factor to consider is your timeframe. If you need a website up and running quickly, then a DIY platform may be the better option. With pre-designed templates and drag-and-drop tools, you can create a website in a matter of hours. However, if you have a longer timeframe and want a custom website with unique features and functionality, then website design may be the better option, even if it takes longer to develop.\r\n<br>\r\n<br>\r\n<b>6- Consider Long-Term Costs</b>\r\n<br>\r\n<br>\r\nFinally, it\'s important to consider long-term costs when deciding between website design and DIY platforms. While DIY platforms may be cheaper in the short term, they can become more expensive over time. For example, if you want to add custom functionality or integrations to your website, you may need to pay for additional plugins or hire a developer. Additionally, some DIY platforms charge a monthly fee, which can add up over time.\r\n<br>\r\nWebsite design, on the other hand, may be more expensive upfront, but it can be more cost-effective in the long run. A professional web designer can create a website that meets your specific needs and doesn\'t require additional plugins or fees.\r\n<br>\r\n<br>\r\n<b>7- Design and Branding</b>\r\n<br>\r\n<br>\r\nOne of the main advantages of hiring a professional web designer is that they can create a unique design and branding for your website that reflects your business\'s personality and values. A custom-designed website can help your business stand out from the competition and establish a strong brand identity. On the other hand, DIY platforms offer pre-designed templates that may not be fully customizable, which can limit your ability to create a unique design and branding.\r\n<br>\r\n<br>\r\n<b>8- Technical Expertise</b>\r\n<br>\r\n<br>\r\nBuilding a website from scratch requires technical expertise in web development, including knowledge of programming languages like HTML, CSS, and JavaScript. If you don\'t have experience in web development, hiring a professional web designer may be the better option. A web designer can handle all the technical aspects of building a website, from coding to hosting to maintenance. However, if you have some technical knowledge and are comfortable using drag-and-drop tools, then a DIY platform may be the better option.\r\n<br>\r\n<br>\r\n<b>9- Support and Maintenance</b>\r\n<br>\r\n<br>\r\nAnother important factor to consider is support and maintenance. When you hire a professional web designer, you get ongoing support and maintenance for your website. If you have any issues or need updates, you can contact your designer directly for assistance. DIY platforms, on the other hand, may offer limited support and maintenance, depending on the plan you choose. If you encounter any issues with your website, you may need to troubleshoot them yourself or hire a developer.\r\n<br>\r\n<br>\r\n<b>10- SEO and Analytics</b>\r\n<br>\r\n<br>\r\nSearch engine optimization (SEO) is the process of optimizing your website to rank higher in search engine results pages (SERPs). SEO is an essential aspect of digital marketing, as it helps drive traffic to your website and increase your visibility online. A professional web designer can help ensure that your website is optimized for search engines, with a focus on keywords, meta tags, and other on-page optimization techniques. Additionally, web designers can help you set up analytics tools like Google Analytics, which can provide valuable insights into your website\'s performance. DIY platforms may offer some SEO and analytics tools, but they may not be as comprehensive as those offered by professional web designers.\r\n\r\n', '../upload/20230322_131539_Blog-3 (2).jpg', '<h2><b>Custom Web Design and Development Services by Factechsol: Crafting Unique and Engaging Websites for Your Business</b></h2>\r\n\r\nFactechsol is a software development company that specializes in providing high-quality website design and development services to businesses of all sizes. With years of experience in the industry, Factechsol has established itself as a trusted provider of custom software solutions, helping businesses achieve their digital goals through innovative web design and development services.\r\n<br>\r\n<br>\r\nAt Factechsol, we believe that every business is unique and requires a custom approach to web design and development. We work closely with our clients to understand their business needs and goals, and we create a customized solution that meets their specific requirements. Our team of expert designers and developers are highly skilled in the latest web design and development technologies, and they are committed to delivering high-quality solutions that exceed our clients\' expectations.\r\n<br>\r\n<br>\r\nWe offer a range of website design and development services to suit the needs of our clients. Our services include custom web design, e-commerce website development, content management system (CMS) development, mobile responsive design, website maintenance, and more. Whether you need a simple brochure website or a complex e-commerce platform, we have the expertise and experience to deliver a solution that meets your needs.\r\n<br>\r\n<br>\r\nAt Factechsol, we understand the importance of user experience (UX) and user interface (UI) design in creating effective websites that engage and convert visitors. Our team of expert designers combines creativity with usability to create visually stunning designs that are easy to navigate and use. We also follow the latest UX and UI design trends and best practices to ensure that our designs are effective in achieving our clients\' goals.\r\n<br>\r\n<br>\r\nIn addition to our web design and development services, we also offer digital marketing services to help businesses drive traffic and increase conversions on their websites. Our digital marketing services include search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, email marketing, and more. We take a holistic approach to digital marketing, combining strategy, creativity, and technology to create effective campaigns that deliver results.\r\n<br>\r\n<br>\r\nOverall, Factechsol is a trusted provider of custom software solutions, offering a range of web design and development services to help businesses achieve their digital goals. With our expertise in the latest technologies and best practices, we are committed to delivering high-quality solutions that exceed our clients\' expectations.', 'Website Design vs. DIY Platforms', 'Website Design and DIY Platforms', 'Web Design and Development Services by Factechsol', 'Choosing Between Website Design and DIY Platforms | Factechsol', '', 'https://fabtechsol.com/blog/website-design-vs-diy-platforms/'),
(22, 'The Role of UX Design in Website Development: Why User Experience Matters', '../upload/20230322_134854_Blog-00001.jpg', 'In the digital age, websites have become the most important marketing tool for businesses. With millions of websites available on the internet, it is important to create a website that stands out from the crowd. UX design plays a crucial role in website development as it focuses on creating an intuitive and satisfying user experience. In this blog, we will explore the importance of UX design in website development and why user experience matters.\r\n\r\n<h2><b>What is UX Design?</b></h2>\r\n\r\nUX design, also known as user experience design, is the process of creating a website that is easy to use, visually appealing, and provides a positive experience for the user. It involves the design of the entire user journey, from the first click on the website to the final purchase or conversion. UX design takes into consideration the needs, goals, and behavior of the user, and creates a website that meets those needs.\r\n\r\n<h2><b>Why is UX Design Important?</b></h2>\r\n\r\nThe importance of UX design in website development cannot be overstated. A well-designed website with a positive user experience can lead to increased traffic, higher conversion rates, and better customer engagement. Here are some reasons why UX design is important:\r\n<br>\r\n<br>\r\n<b>It Improves Usability</b>\r\nA website with good UX design is easy to navigate and understand. It has clear and concise content, intuitive navigation, and a layout that is easy on the eyes. This makes it easier for users to find what they are looking for and complete their desired actions.\r\n<br>\r\n<br>\r\n<b>It Increases Conversion Rates</b>\r\nA website with good UX design is more likely to convert visitors into customers. When a website is easy to use, visitors are more likely to stay on the site, engage with the content, and ultimately convert. This leads to higher conversion rates and increased revenue for the business.\r\n<br>\r\n<br>\r\n<b>It Builds Trust</b>\r\nA website with good UX design builds trust with its users. A website that is easy to use and visually appealing creates a positive first impression, which can lead to increased trust in the business. This trust can lead to increased customer loyalty and repeat business.\r\n<br>\r\n<br>\r\n<b>It Improves SEO</b>\r\nSearch engines like Google prioritize websites with good UX design. A website that is easy to use, with clear and concise content, and a well-organized layout, is more likely to rank higher in search results. This can lead to increased traffic and better visibility for the business.\r\n', '../upload/20230322_134854_Blog-00002.jpg', '<h2><b>The Key Elements of UX Design</b></h2>\r\nNow that we understand the importance of UX design, let\'s take a look at the key elements of UX design.\r\n<br>\r\n<br>\r\n<b>1- User Research</b>\r\n<br>\r\n<br>\r\nThe first step in UX design is user research. This involves understanding the needs, goals, and behavior of the user. User research can include surveys, focus groups, and interviews. This information is used to create a website that meets the needs of the user.\r\n<br>\r\n<br>\r\n<b>2- Information Architecture</b>\r\n<br>\r\n<br>\r\nInformation architecture is the process of organizing content on a website in a logical and intuitive way. This includes creating a hierarchy of content, grouping similar content together, and creating a clear navigation system.\r\n<br>\r\n<br>\r\n<b>3- Visual Design</b>\r\n<br>\r\n<br>\r\nVisual design involves creating a visual language for the website. This includes the use of color, typography, and imagery. Visual design creates an emotional connection with the user and helps to reinforce the brand identity.\r\n<br>\r\n<br>\r\n<b>4- Interaction Design</b>\r\n<br>\r\n<br>\r\nInteraction design is the process of creating interactive elements on a website. This includes buttons, forms, and menus. Interaction design should be intuitive and easy to use, with clear calls to action.\r\n<br>\r\n<br>\r\n<b>5- Usability Testing</b>\r\n<br>\r\n<br>\r\nUsability testing involves testing the website with real users to identify any usability issues. This information is used to make improvements to the website to create a better user experience.\r\n\r\n<h2><b>How to Improve UX Design</b></h2>\r\nNow that we understand the importance of UX design and the key elements that go into it, let\'s take a look at how to improve UX design.\r\n\r\n<br>\r\n<br>\r\n<b>1. Conduct User Testing</b>\r\n<br>\r\n<br>\r\nConducting user testing is an important step in improving UX design. This involves getting feedback from real users on the website\'s usability, content, and design. This feedback can be used to make improvements to the website and create a better user experience.\r\n\r\n<br>\r\n<br>\r\n<b>2. Focus on Content</b>\r\n<br>\r\n<br>\r\nContent is king when it comes to website design. A website with clear and concise content is more likely to keep users engaged and interested. Focus on creating content that is easy to read, informative, and relevant to the user.\r\n<br>\r\n<br>\r\n<b>3. Keep it Simple</b>\r\n<br>\r\n<br>\r\nSimplicity is key when it comes to UX design. A website that is cluttered and difficult to navigate can lead to frustration and a poor user experience. Keep the website design simple and easy to use, with clear calls to action.\r\n<br>\r\n<br>\r\n<b>4. Make it Mobile Friendly</b>\r\n<br>\r\n<br>\r\nIn today\'s digital age, more and more users are accessing websites on their mobile devices. It is important to ensure that the website is mobile-friendly and can be easily accessed on a smartphone or tablet.\r\n<br>\r\n<br>\r\n<b>5. Prioritize Speed</b>\r\n<br>\r\n<br>\r\nUsers expect websites to load quickly. A website that takes too long to load can lead to frustration and a poor user experience. Prioritize speed when designing the website, and ensure that it loads quickly on all devices.\r\n<br>\r\n<br>\r\nIn conclusion, UX design plays a crucial role in website development. A website with good UX design is easy to use, visually appealing, and provides a positive experience for the user. It improves usability, increases conversion rates, builds trust, and improves SEO. The key elements of UX design include user research, information architecture, visual design, interaction design, and usability testing. To improve UX design, focus on conducting user testing, creating clear and concise content, keeping it simple, making it mobile-friendly, and prioritizing speed. By focusing on UX design, businesses can create a website that stands out from the crowd and provides a positive user experience.\r\n<h2><b>Why User Experience Matters</b></h2>\r\nUser Experience (UX) matters because it has a direct impact on the success of a website or digital product. UX refers to the overall experience a user has while interacting with a website or digital product, including factors such as ease of use, usability, and user satisfaction.\r\n<br>\r\n<br>\r\nThere are several reasons why UX matters, including:\r\n<br>\r\n<br>\r\n<b>User Retention:</b>\r\nA website or digital product with a good UX design is more likely to retain users. Users are more likely to return to a website that is easy to use, visually appealing, and provides a positive experience.\r\n<br>\r\n<br>\r\n<b>Increased Engagement:</b> \r\n A website or digital product with a good UX design is more likely to engage users. Users are more likely to spend more time on a website that is easy to navigate, has clear calls to action, and provides relevant information.\r\n<br>\r\n<br>\r\n<b>Improved Conversion Rates:</b>\r\n A website or digital product with a good UX design is more likely to convert users into customers. Users are more likely to make a purchase or complete a desired action on a website that is easy to use and provides a positive experience.\r\n<br>\r\n<br>\r\n<b>Enhanced Brand Perception:</b>\r\nA website or digital product with a good UX design can enhance a brand\'s perception. A positive user experience can help to build trust and credibility with users, leading to a stronger brand reputation.\r\n<br>\r\n<br>\r\n<b>Better SEO:</b>\r\n A website or digital product with a good UX design is more likely to rank higher in search engine results. Search engines such as Google take into account factors such as user experience and usability when ranking websites, meaning that a good UX design can lead to improved SEO.\r\n<br>\r\n<br>\r\nUX matters because it directly impacts user retention, engagement, conversion rates, brand perception, and SEO. Businesses that prioritize UX design are more likely to create successful websites and digital products that provide a positive experience for users.', '../upload/20230322_134854_Blog-0003.jpg', '<h2><b>FABTECHSOL Comprehensive UI/UX Design Services to Enhance User Experience and Achieve Digital Success</b></h2>\r\n\r\nFabtechsol is a leading software development company that specializes in providing top-notch UI/UX design services to businesses of all sizes. We understand that the user interface (UI) and user experience (UX) of a digital product are critical to its success, and we work tirelessly to create designs that are both aesthetically pleasing and easy to use.\r\n<br>\r\n<br>\r\nOur UI/UX design services are comprehensive, and we offer everything from user research and wireframing to prototyping and user testing. We begin by conducting in-depth user research to gain a deep understanding of our clients\' target audience and their needs. This research allows us to create a user-centered design that caters to the needs of the end-users.\r\n<br>\r\n<br>\r\nNext, we use our expertise in information architecture to create wireframes that define the structure of the website or digital product. These wireframes serve as a blueprint for the final design and allow us to get feedback from clients and users early in the design process.\r\n<br>\r\n<br>\r\nOnce the wireframes are approved, we move on to prototyping. Our prototyping process involves creating interactive mockups that allow clients and users to experience the website or digital product in action. This process helps to identify any usability issues and allows us to make necessary changes before moving on to the final design.\r\n<br>\r\n<br>\r\nOur final designs are visually stunning, easy to use, and cater to the needs of the end-users. We ensure that our designs are optimized for all devices, including desktop, mobile, and tablet. We also prioritize usability and accessibility, making sure that the design is easy to navigate and accessible to all users.\r\n<br>\r\n<br>\r\nAt Fabtechsol, we understand that UI/UX design is critical to the success of a digital product. Our team of experienced designers works closely with our clients to create designs that are both visually appealing and easy to use. We strive to create designs that cater to the needs of the end-users and provide a positive user experience. Our UI/UX design services are comprehensive, and we are dedicated to delivering high-quality designs that exceed our clients\' expectations.\r\n<br>\r\n<br>\r\n<b>1. User Testing:</b>\r\n<br>\r\n<br>\r\nWe conduct extensive user testing to gain valuable insights into how users interact with a website or digital product. This allows us to identify areas of improvement and make necessary changes to improve the user experience.\r\n<br>\r\n<br>\r\n<b>2. Branding and Identity:</b>\r\n<br>\r\n<br>\r\nWe help businesses create a strong brand identity by developing unique logos, color schemes, and visual elements that reflect their brand values and resonate with their target audience.\r\n<br>\r\n<br>\r\n<b>3. Front-end Development:</b>\r\n<br>\r\n<br>\r\nWe provide front-end development services to bring our designs to life. Our team of experienced developers ensures that the design is translated into a functional website or digital product that is optimized for all devices.\r\n<br>\r\n<br>\r\n<b>4. Digital Strategy</b>\r\n<br>\r\n<br>\r\n We help businesses develop a comprehensive digital strategy that aligns with their business objectives and helps them achieve their goals. Our team of digital strategists works closely with clients to identify opportunities and develop a roadmap for success.\r\n<br>\r\n<br>\r\nAt Fabtechsol, we are committed to delivering high-quality UI/UX design services that exceed our clients\' expectations. Our team of experienced designers and developers are passionate about creating designs that are both aesthetically pleasing and easy to use. We use the latest design tools and methodologies to ensure that our designs are optimized for all devices and provide a positive user experience. We understand that UI/UX design is critical to the success of a digital product, and we work tirelessly to create designs that help our clients achieve their digital goals.', 'Role of UX Design in Website Development', 'Key Elements of UX Design', 'FABTECHSOL Comprehensive UI/UX Design Services', 'The Importance of UX Design in Website Development | Fabtechsol', 'Discover why user experience matters and how Fabtechsol\'s comprehensive UI/UX design services can enhance your website\'s usability, accessibility, and overall success.', 'https://fabtechsol.com/blog/the-importance-of-ux-design-in-website-development/'),
(23, 'The Future of Website Development - Emerging Technologies to Watch in 2023', '../upload/20230323_104039_Blog-001 (1).jpg', 'The Future of Website Development: Emerging Technologies to Watch in 2023\r\nWebsite development has come a long way since the early days of the internet. As technology continues to evolve, so too does the way we create and interact with websites. In 2023, we can expect to see a number of emerging technologies that will shape the future of website development. From artificial intelligence to voice search, here are some of the most important technologies to watch in the coming years.\r\n', '../upload/20230323_104039_Blog-002 (1).jpg', '<h2><b>1: Artificial Intelligence (AI)</b></h2>\r\nArtificial intelligence is set to revolutionize website development in 2023 and beyond. With AI, developers can create websites that are more personalized and tailored to the needs of individual users. This technology can also help to automate repetitive tasks, such as content creation and optimization, which can save time and improve overall efficiency.\r\nOne of the most exciting applications of AI in website development is the use of chatbots. These automated chat systems can help users navigate websites and answer questions in real-time, providing a more seamless and intuitive user experience. As AI continues to evolve, we can expect to see even more advanced chatbots that are capable of more complex interactions and personalized recommendations.\r\n<h2><b>2: Progressive Web Apps (PWAs)</b></h2>\r\nProgressive web apps are a new type of website that combines the best features of both native apps and traditional websites. PWAs can be accessed through a web browser, but they offer many of the same features as a native app, such as push notifications and offline access. This makes them an ideal solution for businesses that want to offer a mobile app experience without the need to develop a separate app for each platform.\r\n<br>\r\n<br>\r\nIn 2023, we can expect to see more businesses adopting PWAs as a way to improve their online presence and reach more users. With the ability to provide a fast, engaging, and reliable user experience, PWAs are poised to become the go-to solution for mobile web development.\r\n<h2><b>3: Voice Search Optimization</b></h2>\r\nVoice search is becoming an increasingly popular way for users to interact with websites and online services. In fact, by 2023, it\'s estimated that half of all searches will be voice-based. To stay competitive, website developers will need to optimize their sites for voice search in order to improve their search engine rankings and reach a wider audience.\r\n<br>\r\n<br>\r\nTo optimize a website for voice search, developers will need to focus on creating content that\'s conversational and easy to understand. This means using natural language and targeting long-tail keywords that are more likely to be used in voice searches. Additionally, developers will need to ensure that their sites are mobile-friendly and load quickly, as these are important factors that can affect voice search rankings.\r\n<h2><b>4: Augmented Reality (AR)</b></h2>\r\nAugmented reality is another emerging technology that\'s set to change the way we interact with websites. AR allows users to overlay digital information onto the real world, creating a more immersive and engaging experience. In website development, AR can be used to provide interactive product demos, virtual tours, and other engaging content.\r\n<br>\r\n<br>\r\nIn 2023, we can expect to see more websites incorporating AR technology as a way to stand out from the competition and provide a more engaging user experience. With the continued growth of AR technology, we may even see websites that are fully built around this technology, offering a completely immersive and interactive experience for users.\r\n<h2><b>5: Blockchain</b></h2>\r\nBlockchain technology has been around for several years, but it\'s only recently begun to gain mainstream attention. In website development, blockchain can be used to provide enhanced security and privacy for users, as well as to facilitate secure online transactions.\r\n<br>\r\nIn 2023, we can expect to see more websites adopting blockchain technology as a way to improve security and trust with their users. This could include the use of blockchain-based identity verification systems, secure payment gateways, and decentralized storage solutions.\r\nOne of the most promising applications of blockchain technology in website development is the concept of decentralized websites. These are websites that are hosted on a decentralized network, rather than a centralized server. This provides greater security and resistance to censorship, as well as improved speed and scalability.\r\n<h2><b>6: Low-Code Development Platforms</b></h2>\r\nLow-code development platforms are a new type of software that allows developers to create websites and other applications with minimal coding knowledge. These platforms use visual interfaces and drag-and-drop tools to simplify the development process, making it easier for businesses to create their own websites without the need for a dedicated development team.\r\nIn 2023, we can expect to see more businesses adopting low-code development platforms as a way to streamline their website development process and reduce costs. This technology will also make it easier for non-technical staff to create and manage websites, freeing up developers to focus on more complex tasks.\r\n<br>\r\n<br>\r\n<b>Conclusion</b>\r\nAs technology continues to evolve, so too does the world of website development. In 2023, we can expect to see a number of emerging technologies that will shape the future of website development, from artificial intelligence to blockchain and beyond. By staying up-to-date with these trends, website developers can create more engaging, personalized, and secure websites that meet the needs of their users.\r\n<br>\r\n<br>\r\n<b>Here Are Some Of The Key Takeaways:</b>\r\n<br>\r\n<br>\r\n<b>Artificial intelligence</b> \r\nwill play a major role in website development, with chatbots and personalization being two of the most important applications.\r\n<br>\r\n<br>\r\n<b>Progressive web apps</b>\r\nwill become more popular as businesses look for ways to provide a mobile app experience without the need for separate apps.\r\n<br>\r\n<br>\r\n<b>Voice search optimization</b>will be critical for website developers who want to improve their search engine rankings and reach more users.\r\n<br>\r\n<br>\r\n<b>Augmented reality</b>\r\nwill be used to provide more engaging and immersive content on websites.\r\n<br>\r\n<br>\r\n<b>Blockchain technology</b>\r\nwill be adopted to provide enhanced security and trust with users, and decentralized websites will become more common.\r\n<br>\r\n<br>\r\n<b>Low-code development</b>\r\nplatforms will simplify the website development process and make it easier for businesses to create their own websites without the need for a dedicated development team.\r\n<br>\r\n<br>\r\nAs we look towards the future of website development, it\'s clear that technology will continue to play a critical role in shaping the way we create and interact with websites. By staying up-to-date with these emerging technologies, website developers can ensure that they are providing the best possible experience for their users while staying ahead of the competition.', '../upload/20230323_104039_Blog-003 (1).jpg', '<h2><b>Fabtechsol: Empowering Businesses with Emerging Technologies for Future Website Development</b></h2>\r\n<a href=\"https://fabtechsol.com/\">FABTECHSOL</a> is a <a href=\"https://fabtechsol.com/software-dev-service\">software development company</a> that is poised to take advantage of many of the emerging technologies that will shape the future of <a href=\"https://fabtechsol.com/web-dev-service.php\">website development</a> in 2023 and beyond. With a focus on innovation, quality, and customer satisfaction, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a>is well-positioned to help businesses create engaging and personalized websites that meet the needs of their users.\r\nOne of the key areas where <a href=\"https://fabtechsol.com/\">FABTECHSOL</a>excels is in the use of artificial intelligence. As chatbots and other AI-powered tools become more important for <a href=\"https://fabtechsol.com/web-dev-service.php\">website development</a>, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> has the expertise and experience to help businesses create chatbots that can engage with users in a natural and helpful way. This can improve the user experience while reducing the workload for customer service teams.\r\n<br>\r\n<br>\r\nIn addition to chatbots,<a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can also help businesses create personalized experiences for their users through the use of AI. By analyzing user behavior and preferences, Fabtechsol can create personalized content and recommendations that can help keep users engaged with a website and coming back for more.\r\nAnother area where <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can help businesses is with the development of progressive web apps.\r\n<br>\r\n<br>\r\nAs more users turn to mobile devices for their internet browsing, businesses need to find ways to provide a mobile app-like experience without the need for a separate app. Progressive web apps can help accomplish this by providing offline functionality, push notifications, and other features that are traditionally associated with native mobile apps.\r\n<a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can also help businesses optimize their websites for voice search. As more users turn to voice assistants like Alexa and Siri to find information online, it\'s important for <a href=\"https://fabtechsol.com/web-dev-service.php\">website </a> to be optimized for voice search queries. <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can help businesses identify the key phrases and questions that users are likely to ask and optimize their websites accordingly.\r\n<br>\r\n<br>\r\nAnother emerging technology that <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can help businesses take advantage of is augmented reality. By integrating AR features into a website, businesses can provide more engaging and immersive content that can help keep users engaged. For example, a furniture retailer could use AR to allow users to visualize how a piece of furniture would look in their home.\r\n<br>\r\n<br>\r\nFinally, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can help businesses adopt blockchain technology to provide enhanced security and trust with their users. By using blockchain-based identity verification systems and secure payment gateways, businesses can provide a higher level of security for their users. Additionally, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can help businesses create decentralized websites that are hosted on a decentralized network, providing greater security and resistance to censorship.\r\n<br>\r\n<br>\r\nIn addition to these emerging technologies, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> can also help businesses take advantage of low-code development platforms. These platforms use visual interfaces and drag-and-drop tools to simplify the development process, making it easier for businesses to create their own <a href=\"https://fabtechsol.com/web-dev-service.php\">website</a> without the need for a dedicated development team. This can help reduce costs while providing businesses with greater control over their website development process.\r\n<br>\r\n<br>\r\nOverall, <a href=\"https://fabtechsol.com/\">FABTECHSOL</a> is well-positioned to help businesses take advantage of the emerging technologies that will shape the future of <a href=\"https://fabtechsol.com/web-dev-service.php\">website development</a> in 2023 and beyond. With a focus on innovation, quality, and customer satisfaction, Fabtechsol can help businesses create engaging, personalized, and secure websites that meet the needs of their users.\r\n', 'Future of Website Development', ' 2023 Emerging Technologies', 'Fabtechsol Future Website Development', '2023 Emerging Technologies for Website Development - Fabtechsol', 'Discover the latest emerging technologies in website development and how Fabtechsol can help businesses stay ahead of the competition.', 'https://fabtechsol.com/blog/2023-emerging-technologies-for-website-development/'),
(24, 'Why Your Website Needs a Strong Call to Action: Tips for Effective CTAs', '../upload/20230323_134855_Blog---1.jpg', 'As a website owner, you want your visitors to take a specific action, whether that\'s filling out a form, subscribing to your newsletter, or making a purchase. But how do you encourage your visitors to take that action? The answer lies in having a strong call to action (CTA) on your website. In this post, we\'ll explore why CTAs are important, the elements of an effective CTA, and some tips for creating CTAs that convert.\r\n<h2><b>Why Your Website Needs a Strong Call to Action</b></h2>\r\nA call to action is a prompt that tells your website visitors what action to take next. CTAs can be in the form of buttons, links, or even images. The goal of a CTA is to encourage your visitors to take action, whether that\'s signing up for a service, making a purchase, or filling out a form. Here are some reasons why having a strong CTA is important for your website:\r\n<br>\r\n<br>\r\n<b>1. Encourages Action:</b> CTAs are designed to encourage action. By having a clear and concise CTA on your website, you\'re telling your visitors what action to take next.\r\n<br>\r\n<b>2. Improves User Experience:</b>\r\nA clear CTA can improve the user experience on your website. If a visitor knows exactly what they need to do next, they\'re less likely to get frustrated and leave your site.\r\n<br>\r\n<b>3. Increases Conversions:</b>\r\nThe ultimate goal of a CTA is to increase conversions. By guiding your visitors towards taking a specific action, you\'re more likely to convert them into customers.\r\n<h2><b>Elements of an Effective Call to Action</b></h2>\r\nNow that we\'ve explored why CTAs are important, let\'s take a closer look at the elements of an effective CTA. An effective CTA should be:\r\n<br>\r\n<br>\r\n<b>1. Clear:</b>\r\nYour CTA should be clear and concise. Make sure that your visitors know exactly what action you want them to take.\r\n<br>\r\n<b>2. Visible:</b>\r\nYour CTA should be visible on your website. It should be placed in a prominent location where visitors can easily see it.\r\n<br>\r\n<b>3. Actionable:</b>\r\nYour CTA should be actionable. Use strong action words like \"sign up\" or \"subscribe\" to encourage your visitors to take action.\r\n<br>\r\n<b>4. Urgent:</b>\r\nYour CTA should create a sense of urgency. Use phrases like \"limited time offer\" or \"act now\" to encourage visitors to take action quickly.\r\n<br>\r\n<b>5. Personalized:</b>\r\nYour CTA should be personalized to your visitors. Use language that speaks to your audience and makes them feel like the CTA is tailored to their needs.\r\n\r\n', '../upload/20230323_134855_Blog---2.jpg', '<h2><b>Tips for Creating Effective CTAs</b></h2>\r\n<b>Use Eye-Catching Design:</b> \r\n<br>\r\n<br>\r\nAn eye-catching design can help your CTA stand out on the page and grab your visitors\' attention. Use contrasting colors, bold fonts, and clear graphics to make your CTA visually appealing.\r\n<br>\r\n<br>\r\n<b>Use Action-Oriented Language:</b>\r\n<br>\r\n<br>\r\n Use action-oriented language in your CTA to encourage visitors to take action. Use words like \"download,\" \"register,\" or \"subscribe\" to make it clear what you want visitors to do.\r\n<br>\r\n<br>\r\n<b>Be Specific:</b>\r\n<br>\r\n<br>\r\nBe specific about what visitors will receive when they take the desired action. Use language like \"get your free e-book\" or \"sign up for our newsletter\" to make it clear what visitors can expect.\r\n<br>\r\n<br>\r\n<b>Create Urgency:</b>\r\n<br>\r\n<br>\r\nUse language that creates a sense of urgency to encourage visitors to take action quickly. Phrases like \"limited time offer\" or \"only a few spots left\" can create a sense of urgency and motivate visitors to take action.\r\n<br>\r\n<br>\r\n<b>Keep it Short:</b>\r\n<br>\r\n<br>\r\nYour CTA should be short and to the point. Avoid using long sentences or complicated language that could confuse visitors.\r\n<br>\r\n<br>\r\n<b>Test Different CTAs:</b>\r\n<br>\r\n<br>\r\nTest different CTAs to see what works best for your audience. Try different wording, colors, and placement to see what generates the most conversions.\r\n<br>\r\n<br>\r\n<b>Use Social Proof:</b>\r\n<br>\r\n<br>\r\n Use social proof to encourage visitors to take action. This could be in the form of testimonials, reviews, or statistics that show the benefits of taking the desired action.\r\n<br>\r\n<br>\r\n<b>Make it Mobile-Friendly:</b>\r\n<br>\r\n<br>\r\nMake sure your CTA is mobile-friendly, meaning it can be easily viewed and clicked on from a mobile device. With more and more people using their smartphones to browse the web, a mobile-friendly CTA is essential for maximizing conversions.\r\n<br>\r\n<br>\r\n<b>Offer Incentives:</b>\r\n<br>\r\n<br>\r\nOffer incentives to encourage visitors to take action. This could be in the form of a free trial, a discount, or a bonus offer for signing up.\r\n<br>\r\n<br>\r\n<b>Monitor and Adjust:</b>\r\n<br>\r\n<br>\r\nMonitor your CTA\'s performance and adjust as needed. Use analytics tools to track clicks and conversions, and make adjustments based on what you learn.\r\n<br>\r\n<br>\r\nIn summary, having a strong call to action is essential for converting visitors into customers on your website. By using eye-catching design, action-oriented language, and creating a sense of urgency, you can create effective CTAs that motivate visitors to take action. Remember to be specific, keep it short, and test different CTAs to find what works best for your audience. With these tips, you can create CTAs that are tailored to your audience and designed to convert.\r\n', '../upload/20230323_134855_Blog---3.jpg', '<h2><b>Boost Your Conversions with Fabtechol\'s Custom CTA Services</b></h2>\r\n<a href=\"https://fabtechsol.com/\">Fabtechol\'s</a> is a <a href=\"https://fabtechsol.com/software-dev-service\">software development company</a> that offers a range of services to help businesses improve their online presence and drive conversions. Our team of experts specializes in developing <a href=\"https://fabtechsol.com/software-dev-service\">Custom software development</a>solutions that meet the specific needs of our clients. We understand that a strong call to action is critical to the success of any <a href=\"https://fabtechsol.com/web-dev-service.php\">website</a>, and we work closely with our clients to develop effective CTAs that drive conversions and increase engagement.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">At Fabtechol\'s</a>, we provide a range of services to help our clients create effective CTAs. Our team of experienced designers and developers can help you create eye-catching designs that grab your visitors\' attention and encourage them to take action. We also specialize in creating action-oriented language that motivates visitors to take the desired action quickly.\r\n<br>\r\n<br>\r\nIn addition, we offer mobile-friendly solutions that ensure your CTAs are accessible and easily viewed on all devices, including smartphones and tablets. With more and more people using mobile devices to browse the web, it\'s critical that your CTAs are optimized for mobile devices.\r\n<br>\r\n<br>\r\n<a href=\"https://fabtechsol.com/\">At Fabtechol\'s</a>, we understand that every business is unique, and we work closely with our clients to create CTAs that are tailored to their specific needs. We use analytics tools to monitor the performance of our CTAs and make adjustments as needed to ensure maximum conversions.\r\n<br>\r\n<br>\r\nOur team of experts has years of experience in developing custom software solutions for businesses across a range of industries. We pride ourselves on delivering high-quality services that are designed to meet the specific needs of our clients. Whether you need help creating effective CTAs, developing <a href=\"https://fabtechsol.com/software-dev-service\">custom software development</a> solutions, or improving your online presence, <a href=\"https://fabtechsol.com/\">Fabtechol\'s</a> is here to help.', 'Tips for Effective CTAs', 'Tips for Creating Effective CTAs', 'Boost Your Conversions with Fabtechol', 'Effective CTAs: Why Your Website Needs Them | Tips by Fabtechol', 'Learn how effective CTAs can improve your website\'s performance and drive conversions. Fabtechol offers expert tips and custom CTA services tailored to your business needs', 'https://fabtechsol.com/blog/effective-ctas-why-your-website-needs-them/');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(25, 'Low-Code Application Development -  A Game-Changer for Business', '../upload/20230324_113027_01.jpg', 'In recent years, businesses of all sizes and industries have been embracing low-code application development as a means to streamline their operations and boost productivity. Low-code platforms allow users to create software applications with little to no coding experience, dramatically reducing development time and costs. In this blog post, we will explore the concept of low-code application development, its benefits, and the top trends shaping this rapidly evolving technology.\r\n<h2><b>What is Low-Code Application Development?</b></h2>\r\nLow-code application development is an approach to software development that allows users to create and deploy software applications with minimal coding experience. Low-code platforms typically feature drag-and-drop interfaces, pre-built templates, and pre-configured components that enable users to assemble applications quickly and easily. The primary goal of low-code development is to accelerate the software development process and democratize application development by removing the technical barriers that often prevent business users from creating their own applications.\r\n<br>\r\n<br>\r\nLow-code development has become increasingly popular due to its ability to deliver applications quickly and with a lower cost than traditional coding methods. Low-code platforms can be used to create a variety of applications, from simple mobile apps to complex enterprise systems. Many low-code platforms are also highly customizable, allowing businesses to tailor their applications to their specific needs.\r\n', '../upload/20230324_113027_02.jpg', '<h2><b>Benefits of Low-Code Application Development</b></h2>\r\n<b>1: Faster Development:</b> Low-code platforms enable businesses to build applications much faster than traditional coding methods. By using pre-built templates and pre-configured components, developers can assemble applications in a matter of days or weeks, rather than months.\r\n<br>\r\n<br>\r\n<b> 2: Reduced Costs:</b> Low-code development can significantly reduce the costs associated with software development. By minimizing the need for skilled developers, businesses can reduce development costs while still delivering high-quality applications.\r\n<br>\r\n<br>\r\n<b>3: Greater Flexibility:</b> Low-code platforms are highly customizable, allowing businesses to create applications that meet their specific needs. This flexibility also makes it easier to modify or update applications as business needs change.\r\n<br>\r\n<br>\r\n<b>4: Improved Collaboration: </b> Low-code platforms can improve collaboration between business users and developers. By removing the technical barriers to application development, business users can work more closely with developers to create applications that meet their needs.\r\n<br>\r\n<br>\r\n<b>5: Better Business Agility:</b> Low-code platforms enable businesses to respond more quickly to changing market conditions and customer needs. With faster development times and greater flexibility, businesses can create applications that help them stay ahead of the competition.\r\n<h2><b>Trends Shaping Low-Code Application Development</b></h2>\r\nLow-code application development is a rapidly evolving field, and there are several trends that are shaping its future. Here are the top trends to watch in low-code development:\r\n<br>\r\n<br>\r\n<b>1. Integration with AI and Machine Learning:</b> Many low-code platforms are now integrating AI and machine learning capabilities, making it easier for businesses to develop intelligent applications that can analyze data and make predictions.\r\n<br>\r\n<br>\r\n<b>2.Focus on Citizen Development:</b> Citizen development refers to the trend of empowering business users with the tools they need to create their own applications. Many low-code platforms are now geared toward citizen development, enabling business users to create applications with minimal technical knowledge.\r\n<br>\r\n<br>\r\n<b>3. Shift to Cloud-Based Platforms: </b>Cloud-based low-code platforms are becoming increasingly popular, as they offer greater scalability, flexibility, and cost-effectiveness than on-premises solutions.\r\n<br>\r\n<br>\r\n<b>4. Increased Collaboration with IT Teams:</b> As low-code development becomes more prevalent, IT teams are increasingly getting involved in the process. IT teams can help ensure that low-code applications are secure, scalable, and aligned with the organization\'s overall IT strategy.\r\n<br>\r\n<br>\r\n<b>5. Integration with DevOps:</b> DevOps is a software development approach that emphasizes collaboration and integration between development and IT operations teams. Low-code platforms are increasingly being integrated with DevOps tools and practices to streamline the development process and improve application quality.\r\n<br>\r\n<br>\r\n<b>6. Emphasis on Security: </b>As low-code applications become more prevalent, security concerns are also becoming more important. Low-code platforms are now incorporating security features such as authentication, authorization, and encryption to protect applications from cyber threats.\r\n<h2><b>Best Practices for Low-Code Application Development</b></h2>\r\n\r\nWhile low-code development offers many benefits, it\'s important to follow best practices to ensure that your applications are secure, scalable, and aligned with your organization\'s IT strategy. Here are some best practices for low-code application development:\r\n<br>\r\n<br>\r\n\r\n<b>1- Start with a Clear Plan:</b>\r\n<br>\r\n<br>\r\n Before you start developing your application, it\'s important to have a clear plan in place. Define your goals, requirements, and timelines, and make sure that everyone involved in the project is on the same page.\r\n<br>\r\n<br>\r\n<b>2- Choose the Right Platform: </b>\r\n<br>\r\n<br>\r\nThere are many low-code platforms available, each with its own strengths and weaknesses. Choose a platform that aligns with your business needs and IT strategy, and that has the features and capabilities that you need.\r\n<br>\r\n<br>\r\n<b>3- Involve IT Teams:</b>\r\n<br>\r\n<br>\r\n IT teams can provide valuable expertise and guidance throughout the low-code development process. Involve IT teams early on in the process to ensure that your applications are secure, scalable, and aligned with your organization\'s overall IT strategy.\r\n<br>\r\n<br>\r\n<b>4- Ensure Data Security:</b>\r\n<br>\r\n<br>\r\n Low-code applications often handle sensitive data, so it\'s important to ensure that your applications are secure. Incorporate security features such as authentication, authorization, and encryption to protect your applications from cyber threats.\r\n<br>\r\n<br>\r\n<b>5- Test and Refine:</b>\r\n<br>\r\n<br>\r\n Testing is critical to ensure that your low-code applications are functioning as intended. Test your applications thoroughly before deployment, and continue to refine them based on user feedback and changing business needs.\r\n<br>\r\n<br>\r\nLow-code application development is a game-changer for businesses of all sizes and industries. By democratizing application development and enabling businesses to create applications quickly and cost-effectively, low-code platforms are helping businesses to streamline their operations, boost productivity, and respond more quickly to changing market conditions. As low-code development continues to evolve, it\'s important to follow best practices and stay up-to-date with the latest trends to ensure that your applications are secure, scalable, and aligned with your organization\'s overall IT strategy.\r\n<br>\r\n<br>\r\n\r\n\r\n<b>1- Types of Low-Code Platforms: </b>\r\n<br>\r\n<br>\r\nThere are two main types of low-code platforms: model-driven and flow-driven. Model-driven platforms use visual modeling tools to create applications, while flow-driven platforms use a drag-and-drop interface to create applications using pre-built components.\r\n<br>\r\n<br>\r\n<b>2- Benefits of Low-Code Application Development:</b> \r\n<br>\r\n<br>\r\nIn addition to the benefits mentioned earlier, low-code application development can also help businesses to reduce development costs, increase speed to market, and improve collaboration between business and IT teams.\r\n<br>\r\n<br>\r\n<b>3- Challenges of Low-Code Application Development:</b> \r\n<br>\r\n<br>\r\nWhile low-code development offers many benefits, there are also some challenges to consider. For example, low-code platforms may not be as flexible as traditional development methods, and there may be limitations in terms of customization and integration with other systems.\r\n<br>\r\n<br>\r\n<b>4- Examples of Low-Code Platforms:</b>\r\n<br>\r\n<br>\r\n There are many low-code platforms available on the market today, including popular platforms such as Salesforce Lightning, Microsoft Power Apps, and OutSystems.\r\nUse Cases for Low-Code Applications: Low-code applications can be used for a wide range of use cases, including customer relationship management, supply chain management, project management, and more.\r\n', '../upload/20230324_113027_03.jpg', '<h2><b>Partner with Fabtechsol for High-Quality Low-Code Application Development Solutions</b></h2>\r\nFabtechsol is a software development company that specializes in providing low-code application development services to businesses of all sizes and industries. With our expertise in low-code platforms such as Microsoft Power Apps and OutSystems, we help our clients to create custom applications quickly and cost-effectively, without sacrificing quality or security. Our team of experienced developers works closely with our clients to understand their unique business needs and IT strategy, and we leverage the latest low-code development best practices to ensure that our applications are scalable, secure, and aligned with our clients\' overall business objectives. Whether our clients need to streamline their operations, automate their processes, or improve their customer experience, Fabtechsol is committed to delivering high-quality, custom low-code applications that meet their unique business needs.\r\n<br>\r\n<br>\r\n\r\nAt Fabtechsol, we understand the importance of staying up-to-date with the latest trends in low-code development, and we are committed to continually improving our skills and expertise to ensure that we deliver the best possible solutions to our clients. Our approach to low-code application development is grounded in a deep understanding of our clients\' businesses and IT needs, and we work closely with them throughout the development process to ensure that their applications meet their expectations and deliver real business value. Whether our clients need a simple application to automate a specific task, or a complex system to support their entire organization, Fabtechsol has the skills, expertise, and dedication to help them achieve their goals.\r\n<br>\r\n<br>\r\nIn summary, Fabtechsol is a trusted partner for businesses looking to leverage the benefits of low-code application development. With our deep expertise in low-code platforms, our commitment to delivering high-quality solutions, and our focus on understanding our clients\' unique business needs, we are well-positioned to help businesses of all sizes and industries to accelerate their digital transformation and achieve their business objectives.\r\n', 'loram', 'Benefits of Low-Code Application ', 'Fabtechsol High-Quality Low-Code Application Development Solutions', ' A Game-Changer for Business - Low-Code App Dev - fabtechsol', 'Discover how low-code application development is transforming businesses and learn how Fabtechsol can help you leverage this game-changing technology to accelerate your digital transformation', 'https://fabtechsol.com/blog/low-code-app-dev- a-game-changer-for-business/'),
(26, 'The Future of Mobile App Development: Trends to Watch Out For', '../upload/20230324_164300_Blog---1 (1).jpg', 'Mobile apps have become an integral part of our daily lives. We use them for everything from communication and entertainment to shopping and banking. As the use of mobile apps continues to grow, the demand for new and innovative apps also increases. In this blog post, we will explore the latest trends in mobile app development and what to expect in the future.\r\n', '../upload/20230324_164300_Blog---02.jpg', '1.<h2><b> 1- The Rise of Artificial Intelligence (AI) and Machine Learning (ML)</b><h2>\r\n\r\nArtificial intelligence (AI) and machine learning (ML) are no longer buzzwords. They have become an essential part of mobile app development. AI-powered apps can personalize user experiences, provide intelligent recommendations, and automate mundane tasks. Machine learning can help analyze data and make predictions based on user behavior.\r\n<br>\r\n<br>\r\n<b>Personalization with AI</b>\r\n<br>\r\n<br>\r\nPersonalization is a major trend in mobile app development. By leveraging AI, app developers can create personalized experiences for users. AI can analyze user behavior, preferences, and patterns to provide customized recommendations. This can lead to higher user engagement and increased user retention.\r\n<br>\r\n<br>\r\n<b>Automation with AI</b>\r\n<br>\r\n<br>\r\nAnother benefit of AI in mobile app development is automation. AI-powered apps can automate mundane tasks such as scheduling appointments, setting reminders, and managing emails. This can save users time and improve productivity.\r\n<br>\r\n<br>\r\n<b>Predictive Analytics with ML</b>\r\n<br>\r\n<br>\r\nMachine learning can help analyze user data and make predictions based on user behavior. This can help app developers create better user experiences by anticipating user needs. For example, a music streaming app can recommend songs based on the user\'s listening history.\r\n\r\n2. <h2><b>2- The Emergence of Wearable Technology</b></h2>\r\n\r\nWearable technology has been around for a while, but it is only now starting to gain traction in the mobile app development world. Wearables such as smartwatches and fitness trackers offer a unique opportunity for app developers to create new and innovative apps.\r\n<br>\r\n<br>\r\n<b>Integration with Mobile Apps</b>\r\n<br>\r\n<br>\r\nWearables can be integrated with mobile apps to provide a seamless user experience. For example, a fitness app can sync with a user\'s smartwatch to track their activity and provide personalized workout recommendations\r\n<br>\r\n<br>.\r\n<b>Health Monitoring</b> \r\n<br>\r\n<br>\r\nWearables can also be used for health monitoring. With the rise of health and wellness apps, wearables can provide users with real-time health data such as heart rate and blood pressure. This can help users monitor their health and make informed decisions about their lifestyle.\r\n<br>\r\n<br>\r\n<b>Location-based Services</b>\r\n<br>\r\n<br>\r\nWearables can also be used for location-based services. For example, a smartwatch can provide users with real-time information about nearby restaurants, attractions, and events. This can enhance the user experience and make it easier to navigate a new city.\r\n\r\n3. <h2><b>3- Progressive Web Apps (PWA)</b></h2>\r\n\r\nProgressive web apps (PWA) are web applications that offer the same user experience as native apps. PWAs are designed to work on any device and can be accessed through a web browser. They offer several advantages over traditional mobile apps.\r\n<br>\r\n<br>\r\n<b>Accessibility</b>\r\n<br>\r\n<br>\r\nPWAs are accessible to anyone with a web browser, regardless of the device they are using. This can help app developers reach a larger audience and reduce development costs.\r\n<br>\r\n<br>\r\n<b>Offline Support</b>\r\n\r\nPWAs can work offline, which is a major advantage over traditional web apps. This means users can still access the app\'s content even when they don\'t have an internet connection.\r\n<br>\r\n<br>\r\n<b>Fast Loading Speeds</b>\r\n<br>\r\n<br>\r\nPWAs load faster than traditional mobile apps, which can improve user engagement and retention. This is because PWAs only load the necessary resources, while traditional mobile apps load all resources at once.\r\n\r\n4. <h2><b>4- Augmented Reality (AR)</b></h2>\r\nAugmented reality (AR) is a technology that overlays digital information onto the real world. AR has been around for a while, but it is only now starting to gain traction in the mobile app development world. AR offers several advantages for app developers.\r\n<br>\r\n<br>\r\n<b>Enhanced User Experience</b>\r\n<br>\r\n<br>\r\nAR can enhance the user experience by providing an interactive and immersive experience. For example, an AR shopping app can allow users to see how furniture would look in their home before making a purchase.\r\nGamification\r\n<br>\r\n<br>\r\nAR can also be used for gamification. AR games can provide users with a unique gaming experience by overlaying digital elements onto the real world.\r\n<br>\r\n<br>\r\n<b>Advertising</b>\r\n<br>\r\n<br>\r\nAR can also be used for advertising. AR ads can provide users with a more interactive and engaging experience than traditional ads. For example, a car company can allow users to see how a car would look in their driveway before making a purchase.\r\n<br>\r\n<br>\r\n5. <h2><b>5- 	Internet of Things (IoT)</b></h2>\r\n\r\nThe Internet of Things (IoT) refers to the connection of devices to the internet. IoT has been around for a while, but it is only now starting to gain traction in the mobile app development world. IoT offers several advantages for app developers.\r\n<br>\r\n<br>\r\n<b>Automation</b>\r\n<br>\r\n<br>\r\nIoT can be used for automation. For example, a smart home app can allow users to control their home\'s temperature, lighting, and security system from their mobile device.\r\n<br>\r\n<br>\r\n<b>Real-time Data</b>\r\n<br>\r\n<br>\r\nIoT can also provide app developers with real-time data. For example, a health app can collect data from a user\'s fitness tracker and provide personalized recommendations based on their activity levels.\r\n<br>\r\n<br>\r\n<b>Enhanced User Experience</b>\r\n<br>\r\n<br>\r\nIoT can enhance the user experience by providing a seamless and integrated experience. For example, a smart car app can provide users with real-time information about their car\'s performance and maintenance needs.\r\n<br>\r\n<br>\r\n<b>Conclusion</b>\r\n<br>\r\n<br>\r\nMobile app development is constantly evolving, and app developers must stay up-to-date with the latest trends and technologies. The trends discussed in this blog post, such as AI, wearable technology, PWAs, AR, and IoT, are just a few of the many trends that are shaping the future of mobile app development. By embracing these trends, app developers can create new and innovative apps that offer a seamless and personalized user experience.\r\n<br>\r\n<br>\r\n<b>1. Artificial Intelligence (AI)</b>\r\nAI is a technology that enables machines to learn and perform tasks that would typically require human intelligence. AI has several applications in mobile app development, such as chatbots, voice assistants, and personalized recommendations.\r\n<br>\r\n<br>\r\nChatbots: Chatbots are AI-powered conversational agents that can communicate with users through text or voice. Chatbots can be integrated into mobile apps to provide customer service, answer queries, and even make purchases on behalf of users.\r\n\r\nVoice assistants: Voice assistants are AI-powered software programs that can understand and respond to voice commands. Voice assistants can be integrated into mobile apps to provide hands-free interaction and enhance the user experience.\r\n<br>\r\n<br>\r\nPersonalized recommendations: AI can also be used to provide personalized recommendations to users based on their interests, behavior, and preferences. For example, a music app can recommend songs based on a user\'s listening history.\r\n<br>\r\n<br>\r\n<b>2. Wearable Technology</b>\r\nWearable technology refers to electronic devices that can be worn on the body, such as smartwatches and fitness trackers. Wearable technology has several applications in mobile app development, such as health and fitness apps.\r\n<br>\r\n<br>\r\nHealth and fitness apps: Health and fitness apps can be integrated with wearable technology to provide users with real-time data on their health and fitness. For example, a fitness tracker can monitor a user\'s heart rate, steps taken, and calories burned, and sync this data with a mobile app.\r\n<br>\r\n<br>\r\n<b>3. Progressive Web Apps (PWAs)</b>\r\nPWAs are web applications that provide a native app-like experience to users. PWAs have several advantages over traditional mobile apps, such as faster loading times, better performance, and easier installation.\r\n<br>\r\n<br>\r\nFaster loading times: PWAs load faster than traditional mobile apps because they use browser caching to store data and assets.\r\nBetter performance: PWAs are designed to work seamlessly across multiple devices and platforms, providing users with a consistent experience.\r\nEasier installation: PWAs can be installed directly from a web browser, without the need for app stores or downloads.\r\n<br>\r\n<br> \r\n<b>4. Augmented Reality (AR)</b>\r\nAR is a technology that overlays digital information onto the real world. AR has several applications in mobile app development, such as enhanced user experiences, gamification, and advertising.\r\n<br>\r\n<br>\r\nEnhanced user experience: AR can enhance the user experience by providing an interactive and immersive experience. For example, an AR shopping app can allow users to see how furniture would look in their home before making a purchase.\r\n<br>\r\n<br>\r\n\r\nGamification: AR can also be used for gamification. AR games can provide users with a unique gaming experience by overlaying digital elements onto the real world. For example, the popular game PokÃ©mon Go uses AR to allow users to catch virtual PokÃ©mon in real-world locations.\r\nAdvertising: AR can also be used for advertising. AR ads can provide users with a more interactive and engaging experience than traditional ads. For example, a cosmetic company can allow users to see how makeup would look on their face before making a purchase.\r\n<br>\r\n<br>\r\n\r\n<b>Internet of Things (IoT)</b>\r\nIoT refers to the connection of devices to the internet. IoT has several applications in mobile app development, such as automation, real-time data, and enhanced user experience.\r\nAutomation: IoT can be used for automation. For example, a smart home app can allow users to control their home\'s temperature, lighting, and security system from their mobile device.\r\nReal-time data: IoT can provide app developers with real-time data. For example, a weather app can collect data from IoT-enabled sensors and provide users with accurate and up-to-date weather information.\r\n<br>\r\n<br>\r\n\r\nEnhanced user experience: IoT can enhance the user experience by providing a seamless and integrated experience. For example, a smart car app can provide users with real-time information about their car\'s performance and maintenance needs.\r\nOverall, these trends are shaping the future of mobile app development and will continue to do so in the years to come. App developers who stay up-to-date with these trends and incorporate them into their apps will be able to provide users with a personalized, seamless, and engaging experience.\r\n<br>\r\n<br>\r\n', '../upload/20230324_164300_Blog----3.jpg', '<h2><b>FabTechSol: Empowering Businesses with Cutting-Edge Mobile App Solutions</b></h2>\r\n\r\nFabTechSol is a leading software development company that specializes in crafting bespoke mobile applications for businesses across diverse industries. With an astute understanding of cutting-edge technologies such as Artificial Intelligence (AI), Internet of Things (IoT), and Augmented Reality (AR), FabTechSol is at the forefront of the latest trends and advancements in mobile app development. The company\'s team of seasoned developers and innovative designers work in close collaboration with clients to design, develop, and deploy tailored solutions that cater to their unique business requirements. FabTechSol\'s unwavering commitment to quality, user experience, and client satisfaction ensures that their clients receive a seamless, engaging, and personalized mobile app experience that sets them apart from their competitors.\r\n<br>\r\n<br>\r\nFabTechSol was founded in 2011 with the mission of providing businesses with cutting-edge software solutions that help them streamline their operations, increase their productivity, and enhance their customer experience. Since its inception, the company has worked with clients across various industries, including healthcare, finance, retail, and education, to develop mobile apps that cater to their specific business needs. The team at FabTechSol comprises highly skilled professionals with years of experience in software development, app design, project management, and quality assurance. The company\'s agile and iterative development approach ensures that clients are involved in every stage of the app development process, from ideation to deployment. FabTechSol\'s focus on innovation, quality, and customer satisfaction has earned the company numerous accolades and recognition from clients and industry experts alike.\r\n', 'Future of Mobile App Development', 'user experiences', 'FabTechSol Cutting-Edge Mobile App Solutions', 'The Future Trends of Mobile App Development | FABTECHSOL', 'Stay ahead of the game with FabTechSol\'s expert insights on the latest trends shaping the future of mobile app development. From AI to IoT, discover how these trends are revolutionizing the app industry and empowering businesses to provide their users with a personalized and engaging mobile experience.', 'https://fabtechsol.com/blog/the-future-trends-of-mobile-app-development/ '),
(27, 'Microservices Architecture: Building Scalable and Resilient Applications', '../upload/20230325_062243_Blogs-post-001.jpg', 'As applications become more complex, the traditional monolithic architecture is becoming increasingly difficult to maintain. Microservices architecture is emerging as an alternative approach that provides a more scalable and resilient solution to building complex applications. In this blog post, we will explore what microservices architecture is, how it works, and why it is important for building scalable and resilient applications.\r\n\r\n<h2><b>What is Microservices Architecture?</b></h2>\r\n\r\nMicroservices architecture is an approach to software development that structures applications as a collection of small, independent services. Each service is responsible for a specific business capability, and communicates with other services via well-defined APIs. This approach allows for greater flexibility, scalability, and resilience compared to traditional monolithic architecture.\r\n<br>\r\n<br>\r\nMicroservices architecture is based on the principles of service-oriented architecture (SOA) and domain-driven design (DDD). In SOA, software components are designed as individual services that communicate with each other using standardized protocols such as HTTP, REST, or SOAP. In DDD, the focus is on defining business domains and organizing software components around these domains. Microservices architecture combines these two principles to create a highly modular and scalable system.\r\n', '../upload/20230325_062243_Blogs-post-002.jpg', '<h2><b>How Does Microservices Architecture Work?</b></h2>\r\n\r\nMicroservices architecture works by breaking down applications into small, independent services that can be deployed and managed separately. Each service is responsible for a specific business capability, and communicates with other services via APIs. This approach allows for greater flexibility and scalability, as services can be added, removed, or modified without affecting the entire application.\r\n<br>\r\n<br>\r\nEach service in a microservices architecture typically has its own database, which allows for greater data autonomy and reduces the risk of data corruption. Services can be developed and deployed independently, which allows for faster development cycles and greater agility.\r\nMicroservices architecture also relies on containerization technology such as Docker, which allows for greater portability and scalability. Containers are lightweight, standalone packages that contain all the necessary components to run a service, including the code, libraries, and dependencies. Containers can be easily deployed to different environments, which allows for greater flexibility and scalability.\r\n<br>\r\n<br>\r\nWhy is Microservices Architecture Important for Building Scalable and Resilient Applications?\r\nMicroservices architecture is important for building scalable and resilient applications for several reasons:\r\n<br>\r\n<br>\r\n<b>1: Scalability:</b> \r\n<br>\r\n<br>\r\nMicroservices architecture allows for greater scalability by breaking down applications into small, independent services. Each service can be scaled independently, which allows for greater flexibility and reduces the risk of over-provisioning.\r\n<br>\r\n<br>\r\n<b>2: Resilience:</b>\r\n<br>\r\n<br>\r\n Microservices architecture is more resilient than traditional monolithic architecture. If one service fails, it does not affect the entire application, as other services can continue to function. This approach also allows for faster recovery times in the event of a failure\r\n.<br>\r\n<br>\r\n<b>3: Agility:</b>\r\n<br>\r\n<br>\r\n Microservices architecture allows for greater agility and faster development cycles. Services can be developed and deployed independently, which allows for faster release cycles and greater flexibility.\r\n<br>\r\n<br>\r\n<b>4: Modularity:</b> \r\n<br>\r\n<br>\r\nMicroservices architecture is highly modular, which allows for greater flexibility and easier maintenance. Services can be developed, tested, and deployed independently, which reduces the risk of introducing bugs or other issues into the system.\r\n\r\n\r\n<br>\r\n<br>\r\nMicroservices architecture is an emerging approach to software development that provides a more scalable and resilient solution to building complex applications. By breaking down applications into small, independent services, microservices architecture allows for greater flexibility, scalability, and resilience compared to traditional monolithic architecture. With the increasing complexity of modern applications, microservices architecture is becoming an increasingly important approach to building scalable and resilient systems\r\n\r\n\r\n<br>\r\n<br>\r\n<b>a: Decoupling:</b> \r\n<br>\r\n<br>\r\nMicroservices architecture allows for greater decoupling between services, which means that services can be developed, tested, and deployed independently of each other. This approach reduces the risk of introducing bugs or other issues into the system, as changes to one service do not affect the other services.\r\n<br>\r\n<br>\r\n<b>b: Scalability:</b>\r\n<br>\r\n<br>\r\n Microservices architecture allows for greater scalability, as each service can be scaled independently of the others. This approach reduces the risk of over-provisioning, as resources can be allocated to the specific services that require them.\r\n<br>\r\n<br>\r\n<b>c:  Fault Isolation:</b>\r\n<br>\r\n<br>\r\n Microservices architecture allows for greater fault isolation, as failures in one service do not affect the entire application. This approach allows for faster recovery times and reduces the risk of downtime.\r\n<br>\r\n<br>\r\n<b>d: Technology Diversity:</b>\r\n<br>\r\n<br>\r\n Microservices architecture allows for greater technology diversity, as each service can be developed using different technologies or programming languages. This approach allows for greater flexibility and can help to reduce the risk of technology obsolescence.\r\n<br>\r\n<br>\r\n<b>e: Continuous Delivery: </b>\r\n<br>\r\n<br>\r\nMicroservices architecture supports continuous delivery, as services can be developed and deployed independently. This approach allows for faster release cycles and greater agility.\r\nImproved Security: Microservices architecture can improve security, as each service can be secured independently. This approach reduces the risk of security breaches and allows for greater control over access to sensitive data.\r\n<br>\r\n<br>\r\n<b>f: Cost Optimization:</b> \r\n<br>\r\n<br>\r\nMicroservices architecture can help to optimize costs, as resources can be allocated to the specific services that require them. This approach can help to reduce costs associated with over-provisioning and can improve the overall efficiency of the system.\r\n\r\n<br>\r\n<br>\r\nIn summary, microservices architecture is an approach to software development that structures applications as a collection of small, independent services. This approach provides a more scalable, resilient, and flexible solution to building complex applications. By breaking down applications into small, independent services, microservices architecture allows for greater flexibility, scalability, and resilience, while reducing the risk of introducing bugs or other issues into the system.\r\n', '../upload/20230325_062243_Blogs-Post-003.jpg', '<h2><b>FatechSol: Building Scalable and Resilient Applications with Microservices Architecture</b></h2>\r\n\r\nFatechSol is a leading custom software development company that specializes in developing scalable and resilient applications using microservices architecture. With a team of experienced developers and engineers, FatechSol has a proven track record of delivering high-quality software solutions that meet the unique needs of each client.\r\n<br>\r\n<br>\r\nFatechSol\'s expertise in microservices architecture allows the company to develop applications that are more flexible, scalable, and resilient. By breaking down applications into small, independent services, FatechSol is able to develop solutions that can be deployed and updated quickly and efficiently, with minimal risk of introducing bugs or other issues.\r\n<br>\r\n<br>\r\nIn addition to microservices architecture, FatechSol also has expertise in a wide range of technologies and programming languages, including Java, .NET, Node.js, and Python. This expertise allows the company to develop solutions that meet the unique needs of each client, regardless of their technology stack.\r\n<br>\r\n<br>\r\nFatechSol\'s commitment to delivering high-quality software solutions is reflected in its rigorous quality assurance processes. The company\'s developers and engineers are trained to adhere to strict coding standards, and all solutions are thoroughly tested to ensure that they meet the highest standards of quality and performance.\r\n<br>\r\n<br>\r\nIn addition to custom software development, FatechSol also provides a range of related services, including software testing and maintenance, cloud hosting and migration, and IT consulting. These services allow the company to provide end-to-end solutions that meet the needs of clients across a wide range of industries.\r\n<br>\r\n<br>\r\nOverall, FatechSol\'s expertise in microservices architecture and its commitment to delivering high-quality software solutions make it a trusted partner for businesses looking to develop scalable and resilient applications. With a focus on meeting the unique needs of each client, FatechSol is well-positioned to continue to deliver innovative software solutions that drive business success.\r\n', 'Microservices Architecture', 'How Does Microservices Architecture Work', 'FatechSol  Microservices Architecture', 'Microservices Architecture: Building Resilient Applications with - FatechSol', 'Learn how FatechSol, a leading custom software development company, uses microservices architecture to develop scalable and resilient applications. Discover the benefits of this approach and how it can help your business achieve success.', 'https://fabtechsol.com/blog/microservices-architecture-building-resilient-applications/'),
(28, 'Cross-Platform App Development: Pros and Cons', '../upload/20230325_080145_Blog-Poster-01.jpg', 'The demand for mobile applications has been growing rapidly over the years. As a result, businesses are looking for ways to create applications that are compatible with multiple platforms to reach a larger audience. This is where cross-platform app development comes in. In this blog post, we\'ll discuss the pros and cons of cross-platform app development.\r\n\r\n<h2><b>What is Cross-Platform App Development?</b></h2>\r\n\r\nCross-platform app development refers to the process of creating mobile applications that can run on multiple operating systems, such as Android and iOS. Cross-platform development tools allow developers to write code once and deploy it on different platforms, reducing development time and cost.\r\n\r\n<h2><b>Pros of Cross-Platform App Development</b></h2>\r\n\r\n\r\n<b>Cost-Effective</b>\r\n<br>\r\n<br>\r\nOne of the main advantages of cross-platform app development is its cost-effectiveness. With cross-platform development, developers only need to write code once, which saves a significant amount of time and resources. This means that businesses can save money on development costs and invest their resources elsewhere.\r\n<br>\r\n<br>\r\n<b>Faster Development Time</b>\r\n<br>\r\n<br>\r\nAnother benefit of cross-platform app development is that it reduces the time it takes to develop an application. Since developers only need to write code once, they can deploy the application on different platforms quickly, which is crucial in today\'s fast-paced business environment.\r\n<br>\r\n<br>\r\n<b>Wider Audience Reach</b>\r\n<br>\r\n<br>\r\nCross-platform app development allows businesses to reach a wider audience. By developing an application that can run on multiple platforms, businesses can cater to the needs of users on different devices, including smartphones, tablets, and desktops.\r\n<br>\r\n<br>\r\n<b>Consistent User Experience</b>\r\n<br>\r\n<br>\r\nCross-platform development tools ensure a consistent user experience across different platforms. This is because the user interface (UI) and user experience (UX) of the application are consistent across all platforms. This consistency is crucial for building a strong brand image and user loyalty.\r\n<br>\r\n<br>\r\n<b>Easier Maintenance</b>\r\n<br>\r\n<br>\r\nMaintaining an application can be a challenging task, especially when the application is running on multiple platforms. With cross-platform app development, maintenance is easier since developers only need to update the code once. This reduces the risk of errors and ensures that the application remains up-to-date.\r\n', '../upload/20230325_080145_Blog-Poster-02.jpg', '<h2><b>Cons of Cross-Platform App Development</b></h2>\r\n\r\n\r\n<b>Performance Issues</b>\r\n<br>\r\n<br>\r\nOne of the main disadvantages of cross-platform app development is that it can result in performance issues. Since the application needs to run on different platforms, it may not be optimized for a particular platform, which can result in slower performance.\r\n<br>\r\n<br>\r\n<b>Limited Access to Native Features</b>\r\n<br>\r\n<br>\r\nCross-platform development tools may not provide access to all of the native features of a particular platform. This can limit the functionality of the application and result in a less engaging user experience.\r\n<br>\r\n<br>\r\n<b>Debugging and Testing Challenges</b>\r\n<br>\r\n<br>\r\nDebugging and testing a cross-platform application can be challenging. Since the application is running on multiple platforms, developers need to test the application on each platform to ensure that it works correctly. This can be time-consuming and increase development costs.\r\n<br>\r\n<br>\r\n<b>Dependent on Third-Party Tools</b>\r\n<br>\r\n<br>\r\nCross-platform development tools are often dependent on third-party tools and libraries. This means that developers need to rely on these tools to ensure that the application works correctly. If the third-party tool or library is not updated, it can result in compatibility issues and other problems.\r\n<br>\r\n<br>\r\n\r\n<b>Limited Customization</b>\r\n<br>\r\n<br>\r\nCross-platform development tools often provide limited customization options, which can result in a generic-looking application. This can be a disadvantage for businesses that want to create a unique and engaging user experience.\r\n\r\n\r\n<h2><b>Choosing the Right Approach</b></h2>\r\n\r\nWhen it comes to developing mobile applications, businesses have several options, including native app development, cross-platform app development, and hybrid app development. Each approach has its pros and cons, and choosing the right approach depends on several factors, including the business\'s budget, timeline, and target audience.\r\n<br>\r\n<br>\r\n<b>Native App Development</b>\r\n<br>\r\n<br>\r\nNative app development involves creating an application specifically for a particular platform, such as iOS or Android. Native apps provide the best performance and access to all of the native features of the platform. However, native app development is time-consuming and can be costly since developers need to create separate applications for each platform.\r\n<br>\r\n<br>\r\n<b>Cross-Platform App Development</b>\r\n<br>\r\n<br>\r\nCross-platform app development involves creating an application that can run on multiple platforms using a single codebase. Cross-platform development tools, such as React Native and Xamarin, allow developers to write code once and deploy it on different platforms. Cross-platform development is cost-effective and reduces development time. However, cross-platform applications may have performance issues and limited access to native features.\r\n<br>\r\n<br>\r\n<b>Hybrid App Development</b>\r\n<br>\r\n<br>\r\nHybrid app development involves creating an application using web technologies, such as HTML, CSS, and JavaScript, and wrapping it in a native container. Hybrid apps provide access to some native features and can run on multiple platforms. However, hybrid apps may have performance issues and limited access to native features.\r\n\r\n<br>\r\n<br>\r\nCross-platform app development offers several benefits, including cost-effectiveness, faster development time, wider audience reach, consistent user experience, and easier maintenance. However, it also has its drawbacks, including performance issues, limited access to native features, debugging and testing challenges, dependency on third-party tools, and limited customization options. When choosing the right approach for mobile app development, businesses should consider their budget, timeline, and target audience. Ultimately, the decision between native, cross-platform, or hybrid app development should be based on the business\'s specific needs and requirements.\r\n', '../upload/20230325_080145_Blog-Poster-03 (1).jpg', '<h2><b>FabTechSol: Providing Custom Cross-Platform App Development Solutions for Businesses</b></h2>\r\n\r\n\r\n<a href=\"https://fabtechsol.com/\">FabTechSol</a> is a <a href=\"https://fabtechsol.com/software-dev-service\">software development</a> company that specializes in developing high-quality, <a href=\"https://fabtechsol.com/software-dev-service\">custom software solutions</a> for businesses of all sizes. With a team of skilled developers, <a href=\"https://fabtechsol.com/\">FabTechSol</a> provides a wide range of <a href=\"https://fabtechsol.com/software-dev-service\">software development</a> services, including cross-platform <a href=\"https://fabtechsol.com/app-dev-service\">app development</a>.\r\n<br>\r\n<br>\r\nAt <a href=\"https://fabtechsol.com/\">FabTechSol</a>, we understand that businesses today need to reach a wider audience with their <a href=\"https://fabtechsol.com/app-dev-service\">mobile development</a>, and cross-platform app development offers a cost-effective solution. Our team of developers has extensive experience in developing cross-platform applications using popular tools like React Native and Xamarin. We ensure that the applications we develop offer consistent user experience across different platforms, enabling businesses to reach a wider audience.\r\n<br>\r\n<br>\r\nWe also recognize that cross-platform app development has its drawbacks, including performance issues and limited access to native features. To overcome these challenges, our team of developers works closely with businesses to determine their specific requirements and develop customized solutions that meet their unique needs. We ensure that the applications we develop are optimized for performance and offer access to as many native features as possible.\r\n<br>\r\n<br>\r\nAt <a href=\"https://fabtechsol.com/\">FabTechSol</a>, we take pride in delivering high-quality <a href=\"https://fabtechsol.com/software-dev-service\">software solution</a> that exceed our clients\' expectations. Our team of developers is passionate about technology and is always striving to learn and adopt new technologies to ensure that we stay ahead of the competition. With our years of experience in <a href=\"https://fabtechsol.com/software-dev-service\">software development</a>, we are confident that we can provide businesses with the best cross-platform <a href=\"https://fabtechsol.com/app-dev-service\">app development</a> solutions that meet their specific needs and requirements.\r\n<br>\r\n<br>\r\nIn conclusion, <a href=\"https://fabtechsol.com/\">FabTechSol</a> is a software development company that provides a wide range of <a href=\"https://fabtechsol.com/software-dev-service\">software development</a> services, including cross-platform <a href=\"https://fabtechsol.com/app-dev-service\">app development</a>. We are committed to delivering high-quality software solutions that meet our clients\' specific needs and requirements. With our expertise in cross-platform <a href=\"https://fabtechsol.com/app-dev-service\">app development</a>, we can help businesses reach a wider audience and achieve their business goals.\r\n', 'Cross-Platform App Development', 'Cons of Cross-Platform App ', 'FabTechSol Providing Custom Cross-Platform App Development', 'Pros and Cons of Cross-Platform App Development | FabTechSol', 'Discover the advantages and disadvantages of cross-platform app development and learn how FabTechSol provides custom solutions for businesses looking to reach a wider audience with their mobile applications.', 'https://fabtechsol.com/blog/pros-and-cons-of-cross-platform-app-development/');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(29, 'DevOps in Application Development: Benefits and Best Practices', '../upload/20230326_181537_Blog-Poster-design--01.jpg', 'In today\'s fast-paced world, businesses need to develop and deliver applications quickly to meet their customers\' needs. To achieve this, organizations are adopting DevOps practices, which combine development and operations teams to improve collaboration, communication, and automation. DevOps aims to break down silos between these two teams, resulting in faster delivery, increased efficiency, and higher quality software.\r\n<br>\r\n<br>\r\nIn this article, we will explore the benefits of DevOps in application development and discuss some best practices that organizations should follow to achieve successful DevOps implementation.\r\n', '../upload/20230326_181537_Blog-Poster-design--02.jpg', '<h2><b>Benefits of DevOps in Application Development</b></h2>\r\n\r\n<b>Faster Time-to-Market</b>\r\n<br>\r\n<br>\r\nDevOps practices allow organizations to develop and deploy applications at a faster pace. With DevOps, development and operations teams work together to automate processes, reduce manual errors, and streamline the deployment process. This results in faster time-to-market, enabling businesses to meet their customers\' needs quickly.\r\n<br>\r\n<br>\r\n<b>Improved Collaboration and Communication</b>\r\n<br>\r\n<br>\r\n\r\nDevOps practices emphasize collaboration and communication between development and operations teams. This helps to break down the silos that can exist between these teams and promote a culture of shared responsibility. Collaboration and communication lead to a better understanding of each other\'s needs, resulting in higher-quality software and fewer errors.\r\n<br>\r\n<br>\r\n\r\n<b>Increased Efficiency</b>\r\n<br>\r\n<br>\r\n\r\nDevOps practices help organizations to automate manual processes, reducing the time and effort required for development, testing, and deployment. Automation also helps to identify issues quickly, allowing teams to address them before they become major problems. This leads to increased efficiency, reducing costs and enabling organizations to deliver more value to their customers.\r\n<br>\r\n<br>\r\n\r\n<b>Higher Quality Software</b>\r\n<br>\r\n<br>\r\n\r\nDevOps practices focus on continuous integration and continuous delivery, which help to ensure that software is tested and deployed regularly. This leads to higher-quality software, with fewer bugs and issues. By continuously monitoring and improving software quality, organizations can deliver more reliable and robust applications to their customers.\r\n<h2><b>Best Practices for DevOps in Application Development</b></h2>\r\n\r\n<b>1- Continuous Integration</b>\r\n<br>\r\n<br>\r\n\r\nContinuous integration is the practice of integrating code changes into a shared repository frequently. This ensures that code changes are tested and validated early in the development process, reducing the likelihood of errors and bugs. Continuous integration also helps to identify issues quickly, allowing teams to address them before they become major problems.\r\n<br>\r\n<br>\r\n\r\n<b>2- Continuous Delivery</b>\r\n<br>\r\n<br>\r\n\r\nContinuous delivery is the practice of deploying code changes to production frequently. This ensures that software is tested and deployed regularly, reducing the time required for testing and deployment. Continuous delivery also helps to identify issues quickly, allowing teams to address them before they become major problems.\r\n<br>\r\n<br>\r\n\r\n<b>3- Automated Testing</b>\r\n<br>\r\n<br>\r\n\r\nAutomated testing is the practice of using software tools to test applications automatically. This helps to reduce manual errors and identify issues quickly. Automated testing also helps to ensure that software is tested thoroughly, improving its quality and reliability.\r\n<br>\r\n<br>\r\n\r\n<b>4- Infrastructure as Code</b>\r\n<br>\r\n<br>\r\n\r\nInfrastructure as code is the practice of managing infrastructure using code. This allows organizations to automate the deployment and management of infrastructure, reducing the time required for manual processes. Infrastructure as code also helps to ensure that infrastructure is managed consistently, reducing the likelihood of errors and issues.\r\n<br>\r\n<br>\r\n\r\n<b>5- Monitoring and Logging</b>\r\n<br>\r\n<br>\r\n\r\nMonitoring and logging are essential practices in DevOps. They help organizations to identify issues quickly and address them before they become major problems. Monitoring and logging also help to improve the reliability and performance of software, enabling organizations to deliver more value to their customers.\r\n<br>\r\n<br>\r\n\r\n<b>6- Collaboration and Communication</b>\r\n<br>\r\n<br>\r\n\r\nCollaboration and communication are key to successful DevOps implementation. Development and operations teams should work together to break down silos and promote a culture of shared responsibility. Collaboration and communication help to ensure that everyone is working towards the same goals, resulting in higher-quality software and faster time-to-market.\r\n<br>\r\n<br>\r\n\r\nSecurity\r\n<br>\r\n<br>\r\n\r\nSecurity is a critical aspect of application development. DevOps practices can help organizations to improve the security of their applications by integrating security into the development process. This includes conducting regular security audits, performing vulnerability assessments, and implementing security testing tools.\r\n<br>\r\n<br>\r\n\r\n<b>Continuous Improvement</b>\r\n<br>\r\n<br>\r\n\r\nContinuous improvement is a fundamental principle of DevOps. Organizations should regularly assess their DevOps practices and look for ways to improve them. This includes identifying areas for automation, improving collaboration and communication, and refining testing and deployment processes.\r\n<br>\r\n<br>\r\n\r\n\r\n\r\nDevOps practices can help organizations to improve the speed, quality, and efficiency of their application development process. By breaking down silos between development and operations teams and promoting a culture of collaboration and communication, DevOps can help organizations to deliver higher-quality software at a faster pace. To achieve successful DevOps implementation, organizations should follow best practices such as continuous integration, continuous delivery, automated testing, infrastructure as code, monitoring and logging, collaboration and communication, security, and continuous improvement.\r\n\r\n\r\n<br>\r\n<br>\r\n\r\n<b>DevOps Culture</b>\r\n<br>\r\n<br>\r\n\r\nDevOps is not just about tools and technology; it\'s also about culture. DevOps culture emphasizes collaboration, communication, and shared responsibility between development and operations teams. It encourages a mindset of continuous improvement, where teams are always looking for ways to streamline processes, reduce waste, and improve quality.\r\n<br>\r\n<br>\r\n\r\n\r\n<b>DevOps Tools</b>\r\n<br>\r\n<br>\r\n\r\nThere are many different tools available for DevOps, including continuous integration and delivery tools, automated testing tools, monitoring and logging tools, and infrastructure automation tools. Some popular DevOps tools include Jenkins, GitLab, Ansible, Docker, and Kubernetes.\r\n<br>\r\n<br>\r\n\r\n<b>DevOps and Agile</b>\r\n<br>\r\n<br>\r\n\r\nDevOps and Agile methodologies are closely related and often used together. Both Agile and DevOps emphasize collaboration, flexibility, and continuous improvement. While Agile focuses on the development process, DevOps extends these principles to the entire software development lifecycle, from development to testing to deployment.\r\n<br>\r\n<br>\r\n\r\n<b>DevOps and Cloud Computing</b>\r\n<br>\r\n<br>\r\n\r\nDevOps and cloud computing are also closely related. Cloud computing provides the infrastructure and resources needed for DevOps practices such as continuous integration, continuous delivery, and automated testing. Cloud computing also allows organizations to scale their applications quickly and easily, enabling faster time-to-market.\r\n<br>\r\n<br>\r\n\r\n<b>DevOps Challenges</b>\r\n<br>\r\n<br>\r\n\r\nWhile DevOps offers many benefits, it also presents several challenges. One of the biggest challenges is cultural resistance, as some team members may be resistant to change or may feel that their role is threatened. Other challenges include tool selection, integration, and maintenance, as well as ensuring that security and compliance requirements are met.\r\n<br>\r\n<br>\r\n\r\n<b>DevSecOps</b>\r\n<br>\r\n<br>\r\n\r\nDevSecOps is an extension of DevOps that focuses on integrating security into the development process. DevSecOps emphasizes the need for security testing throughout the software development lifecycle, from design to deployment. By integrating security into DevOps practices, organizations can reduce the risk of security breaches and ensure that their applications are secure and compliant.\r\n<br>\r\n<br>\r\n\r\nIn summary, DevOps is a set of practices and methodologies that aim to improve the speed, quality, and efficiency of application development. DevOps emphasizes collaboration, communication, and automation between development and operations teams, and it includes practices such as continuous integration, continuous delivery, and automated testing. While DevOps offers many benefits, it also presents several challenges, including cultural resistance, tool selection and maintenance, and ensuring security and compliance. To achieve successful DevOps implementation, organizations need to focus on culture, tools, and continuous improvement, and they may also need to consider DevSecOps practices to ensure the security of their applications.\r\n', '../upload/20230326_181537_Blog-Poster-design--03.jpg', '<h2><b>Benefits of DevOps Practices for FabTechSol: Improved Speed, Collaboration, and Security</b></h2>\r\n\r\nFabTechSol is a software development company that has embraced DevOps practices to deliver high-quality software to its clients. By using DevOps methodologies, FabTechSol has been able to improve the speed and efficiency of its application development process while maintaining a high standard of quality.\r\n<br>\r\n<br>\r\n\r\nAt FabTechSol, the DevOps culture is deeply ingrained in the organization\'s values. Collaboration and communication are encouraged between development and operations teams, and there is a focus on continuous improvement. By breaking down silos and promoting a culture of collaboration, FabTechSol has been able to reduce waste, improve quality, and increase efficiency.\r\n<br>\r\n<br>\r\n\r\nFabTechSol uses a range of DevOps tools to support its development process. These tools include continuous integration and delivery tools, automated testing tools, and monitoring and logging tools. By using these tools, FabTechSol has been able to automate many of its processes, reduce the risk of errors, and improve the speed of delivery.\r\n<br>\r\n<br>\r\n\r\nFabTechSol also recognizes the importance of cloud computing in supporting its DevOps practices. By using cloud computing, FabTechSol has been able to scale its applications quickly and easily, allowing it to respond to changing business needs and deliver solutions faster.\r\n<br>\r\n<br>\r\n\r\nWhile embracing DevOps practices has been beneficial for FabTechSol, it has also presented challenges. One of the biggest challenges has been cultural resistance, as some team members may be resistant to change. However, by promoting a culture of collaboration and continuous improvement, FabTechSol has been able to overcome this challenge.\r\n<br>\r\n<br>\r\n\r\nFabTechSol also recognizes the importance of security and compliance in the development process. The company has integrated security into its DevOps practices, including conducting regular security audits, performing vulnerability assessments, and implementing security testing tools. By doing so, FabTechSol ensures that its applications are secure and compliant.\r\n<br>\r\n<br>\r\n\r\nIn conclusion, FabTechSol is a software development company that has embraced DevOps practices to deliver high-quality software to its clients. By promoting a culture of collaboration and continuous improvement, using a range of DevOps tools, and embracing cloud computing, FabTechSol has been able to improve the speed and efficiency of its application development process while maintaining a high standard of quality.\r\n<br>\r\n<br>\r\n\r\nFabTechSol has also recognized the importance of DevSecOps in ensuring the security of its applications. The company has integrated security into its DevOps practices to address security concerns and reduce the risk of security breaches. By following DevSecOps practices, FabTechSol has been able to identify and remediate security vulnerabilities early in the development process, reducing the risk of security breaches.\r\n<br>\r\n<br>\r\n\r\nOne of the key benefits of using DevOps practices at FabTechSol is improved speed and efficiency in the development process. By using continuous integration and delivery, automated testing, and other DevOps tools, the company has been able to deliver software faster and with fewer errors. This has allowed FabTechSol to respond quickly to changing business needs and deliver solutions that meet the requirements of its clients.\r\n<br>\r\n<br>\r\n\r\nIn addition to improving speed and efficiency, using DevOps practices has also allowed FabTechSol to reduce costs. By automating many of its processes, the company has been able to reduce the need for manual intervention and reduce the risk of errors. This has resulted in fewer defects and rework, reducing the overall cost of development.\r\n<br>\r\n<br>\r\n\r\nAnother benefit of using DevOps practices is improved collaboration and communication between development and operations teams. By breaking down silos and promoting a culture of collaboration, FabTechSol has been able to improve communication and reduce misunderstandings between teams. This has resulted in a smoother and more efficient development process, with fewer delays and issues.\r\n<br>\r\n<br>\r\n\r\nOverall, FabTechSol has embraced DevOps practices to deliver high-quality software to its clients. By promoting a culture of collaboration and continuous improvement, using a range of DevOps tools, embracing cloud computing, and following DevSecOps practices, the company has been able to improve the speed and efficiency of its development process while maintaining a high standard of quality.\r\n', 'DevOps in Application Development', 'DevOps in Application Development', 'DevOps in Application Development', 'Benefits and Best Practices - DevOps in Application Dev - fabtechsol', 'how FabTechSol, a software development company, has embraced DevOps practices to improve the speed and efficiency of its application development process. ', 'https://fabtechsol.com/blog/benefits-and-best-practices-devOps-in-application-development/'),
(30, 'Benefits of DevOps Practices for FabTechSol: Improved Speed, Collaboration, and Security', '../upload/20230326_181637_Blog---01 - Copy.jpg', '<b>Introduction</b>\r\n<br>\r\n<br>\r\nDevOps is a set of practices that combines software development (Dev) and IT operations (Ops) to shorten the systems development life cycle while delivering features, fixes, and updates frequently and more reliably. The adoption of DevOps practices can benefit organizations in multiple ways, including improved speed, collaboration, and security. In this blog, we will explore how FabTechSol, a fictional manufacturing company, can benefit from DevOps practices and how it can improve its operations.\r\nh2><b>Benefits of DevOps Practices</b></h2>\r\n\r\n<b>Improved Speed</b>\r\n<br>\r\n<br>\r\n\r\nOne of the primary benefits of DevOps practices is improved speed. With DevOps practices, development and operations teams work together to create an automated and streamlined software delivery pipeline. This streamlined pipeline helps teams deliver software changes faster and more reliably.\r\n<br>\r\n<br>\r\n\r\n<h2><b>Continuous Integration and Continuous Delivery (CI/CD)</b></h2>\r\nContinuous Integration and Continuous Delivery (CI/CD) are the foundational practices of DevOps that help teams deliver software changes faster and more reliably. CI/CD is a process where developers frequently integrate their code into a central repository, which is automatically built, tested, and deployed to production environments.\r\n<br>\r\n<br>\r\n\r\nCI/CD helps teams identify issues earlier in the development cycle, which reduces the time and effort required to resolve them. By automating the testing and deployment process, CI/CD enables teams to deliver software changes quickly and with confidence.\r\n<br>\r\n<br>\r\n\r\n<b>1- Infrastructure as Code (IaC)</b>\r\n<br>\r\n<br>\r\n\r\nInfrastructure as Code (IaC) is a DevOps practice that enables teams to manage their infrastructure as software code. With IaC, teams can automate the creation, configuration, and management of their infrastructure, including servers, networks, and storage.\r\nBy treating infrastructure as code, teams can apply the same principles of version control, automated testing, and deployment to infrastructure that they apply to software code. This enables teams to manage their infrastructure more efficiently, reduce the time and effort required to provision and configure infrastructure, and reduce the risk of errors and inconsistencies.\r\n<br>\r\n<br>\r\n\r\n<b>2- Improved Collaboration</b>\r\n<br>\r\n<br>\r\n\r\nAnother benefit of DevOps practices is improved collaboration. DevOps practices encourage collaboration between development and operations teams, which enables teams to work together more effectively and efficiently.\r\n<br>\r\n<br>\r\n\r\n<b>3- Cross-functional Teams</b>\r\n<br>\r\n<br>\r\n\r\nDevOps practices encourage the creation of cross-functional teams that include members from both development and operations teams. These teams work together to deliver software changes faster and more reliably. By breaking down silos between development and operations teams, cross-functional teams can better understand each other\'s needs and priorities, which improves communication and collaboration.\r\n<br>\r\n<br>\r\n\r\n<b>4- Agile Methodologies</b>\r\n<br>\r\n<br>\r\n\r\nAgile methodologies, such as Scrum and Kanban, are commonly used in DevOps practices. Agile methodologies emphasize collaboration, communication, and flexibility, which are essential for effective DevOps. Agile methodologies encourage frequent communication between team members, which helps teams identify and resolve issues earlier in the development cycle.\r\n<br>\r\n<br>\r\n\r\n<b>5- Improved Security</b>\r\n<br>\r\n<br>\r\n\r\nFinally, DevOps practices can improve security. DevOps practices enable teams to address security concerns early in the development cycle, which reduces the risk of security vulnerabilities and improves overall security.\r\n<br>\r\n<br>\r\n\r\n<b>6- Security as Code</b>\r\n<br>\r\n<br>\r\n\r\nSecurity as Code is a DevOps practice that treats security concerns as part of the software development life cycle. With Security as Code, teams integrate security checks and controls into the software delivery pipeline, which helps identify and remediate security issues earlier in the development cycle.\r\n<br>\r\n<br>\r\n\r\nBy treating security as code, teams can ensure that security is a priority throughout the development process. This enables teams to reduce the risk of security vulnerabilities and ensure that security concerns are addressed proactively.\r\n<br>\r\n<br>\r\n\r\n<b>7- Automated Compliance</b>\r\n<br>\r\n<br>\r\n\r\nAutomated compliance is another DevOps practice that can improve security. Automated compliance involves automating compliance checks and controls into the software delivery pipeline. This ensures that compliance requirements are met throughout the development process, which reduces the risk of compliance violations and penalties.\r\n<br>\r\n<br>\r\n\r\nBy automating compliance checks, teams can identify compliance issues earlier in the development cycle, which reduces the time and effort required to remediate them. Automated compliance also improves auditability and accountability, as teams can provide evidence of compliance throughout the development process.\r\n', '../upload/20230326_181637_Blog--02 - Copy.jpg', 'How FabTechSol Can Benefit from DevOps Practices\r\nNow that we have explored the benefits of DevOps practices, let\'s discuss how FabTechSol can benefit from these practices.\r\n<br>\r\n<br>\r\n\r\n<b>Improved Speed</b>\r\n<br>\r\n<br>\r\n\r\nFabTechSol can benefit from improved speed by adopting DevOps practices such as CI/CD and IaC. By automating the software delivery pipeline, FabTechSol can deliver software changes faster and more reliably. This can help FabTechSol improve its time-to-market, which can give it a competitive advantage in the marketplace.\r\n<br>\r\n<br>\r\n\r\nBy adopting IaC, FabTechSol can also improve the speed at which it can provision and configure infrastructure. This can help FabTechSol reduce the time and effort required to deploy and maintain its infrastructure, which can improve operational efficiency and reduce costs.\r\n<br>\r\n<br>\r\n\r\n<b>Improved Collaboration</b>\r\n<br>\r\n<br>\r\n\r\nFabTechSol can benefit from improved collaboration by creating cross-functional teams and adopting agile methodologies. By breaking down silos between development and operations teams, FabTechSol can improve communication and collaboration between these teams, which can improve the quality and reliability of its software.\r\n<br>\r\n<br>\r\n\r\nAgile methodologies can also help FabTechSol improve collaboration by encouraging frequent communication between team members. This can help FabTechSol identify and resolve issues earlier in the development cycle, which can reduce the time and effort required to deliver software changes.\r\n<br>\r\n<br>\r\n\r\n<b>Improved Security</b>\r\n<br>\r\n<br>\r\n\r\nFinally, FabTechSol can benefit from improved security by adopting DevOps practices such as Security as Code and automated compliance. By integrating security into the software development life cycle, FabTechSol can ensure that security is a priority throughout the development process. This can help FabTechSol reduce the risk of security vulnerabilities and ensure that its software is secure and reliable.\r\n<br>\r\n<br>\r\n\r\nAutomated compliance can also help FabTechSol ensure that it meets compliance requirements throughout the development process. This can help FabTechSol reduce the risk of compliance violations and penalties, which can improve its reputation and financial stability.\r\n<br>\r\n<br>\r\n\r\nIn conclusion, DevOps practices can benefit organizations in multiple ways, including improved speed, collaboration, and security. By adopting DevOps practices such as CI/CD, IaC, cross-functional teams, agile methodologies, Security as Code, and automated compliance, organizations can improve their operations and gain a competitive advantage in the marketplace.\r\n<br>\r\n<br>\r\n\r\nFabTechSol can benefit from DevOps practices by improving its speed, collaboration, and security. By adopting these practices, FabTechSol can improve its time-to-market, reduce costs, improve communication and collaboration between teams, and ensure that its software is secure and reliable.\r\n <br>\r\n<br>\r\n\r\nIf you are interested in adopting DevOps practices for your organization, consult with experienced DevOps consultants or providers who can guide you through the process of adopting and implementing these practices in your organization.\r\n<br>\r\n<br>\r\n\r\n<h2><b>Continuous Integration/Continuous Delivery (CI/CD)</b></h2>\r\n<br>\r\n<br>\r\n\r\nContinuous Integration/Continuous Delivery (CI/CD) is a set of practices that involves automating the software delivery pipeline. This means that whenever a developer commits changes to the codebase, the changes are automatically built, tested, and deployed to production. This helps to ensure that the software is always up-to-date and that any bugs or issues are caught and fixed early on in the development cycle.\r\n<br>\r\n<br>\r\n\r\nCI/CD can help organizations improve their speed by reducing the time it takes to deliver software changes. With CI/CD, developers can focus on writing code, while the automation takes care of building, testing, and deploying the software. This can help organizations release software changes more quickly and with greater reliability.\r\n<br>\r\n<br>\r\n\r\n<b>Infrastructure as Code (IaC)</b>\r\n<br>\r\n<br>\r\n\r\nInfrastructure as Code (IaC) is a practice that involves defining infrastructure configurations as code. This means that infrastructure can be provisioned and managed using the same version control and collaboration tools that developers use for their code.\r\n<br>\r\n<br>\r\n\r\nBy adopting IaC, organizations can improve their speed and reduce costs by automating the process of provisioning and configuring infrastructure. This can help organizations deploy infrastructure more quickly and with greater reliability.\r\n<br>\r\n<br>\r\n\r\n<b>Cross-Functional Teams</b>\r\n<br>\r\n<br>\r\n\r\nCross-functional teams are teams that are made up of individuals with different skills and expertise. In a DevOps context, this often means bringing together developers, operations staff, and other stakeholders to work collaboratively on software development.\r\n <br>\r\n<br>\r\n\r\nBy adopting cross-functional teams, organizations can improve collaboration between development and operations teams. This can help to reduce silos and ensure that all stakeholders are involved in the software development process from start to finish. This can help to improve the quality and reliability of the software.\r\n<br>\r\n<br>\r\n\r\n<b>Agile Methodologies</b>\r\n<br>\r\n<br>\r\n\r\nAgile methodologies are a set of practices that are focused on delivering software in an iterative and incremental manner. This involves breaking down development work into smaller, more manageable chunks, and delivering those chunks to customers on a regular basis.\r\n<br>\r\n<br>\r\n\r\nBy adopting agile methodologies, organizations can improve collaboration and communication between team members. This can help to ensure that issues are caught and addressed early on in the development cycle. Agile methodologies can also help to improve speed by enabling teams to deliver software changes more quickly and with greater reliability.\r\n<br>\r\n<br>\r\n\r\n<b>Security as Code</b>\r\n<br>\r\n<br>\r\n\r\nSecurity as Code is a practice that involves integrating security into the software development life cycle. This means that security is treated as a first-class citizen, and is built into the software from the very beginning.\r\nBy adopting Security as Code, organizations can ensure that security is a priority throughout the development process. This can help to reduce the risk of security vulnerabilities and ensure that the software is secure and reliable.\r\n<br>\r\n<br>\r\n\r\n<b>Automated Compliance</b>\r\n<br>\r\n<br>\r\n\r\nAutomated compliance is a practice that involves automating compliance checks throughout the software development life cycle. This means that compliance requirements are checked automatically, and any issues are caught and addressed early on in the development cycle.\r\nBy adopting automated compliance, organizations can ensure that compliance requirements are met throughout the development process. This can help to reduce the risk of compliance violations and penalties.\r\n<br>\r\n<br>\r\n\r\nOverall, DevOps practices can provide numerous benefits for organizations, including improved speed, collaboration, and security. By adopting these practices, organizations can improve their operations and gain a competitive advantage in the marketplace.\r\n', '../upload/20230326_181637_Blog--03 - Copy.jpg', '<h2><b>FabTechSol\'s Services Aligned with DevOps Practices for Improved Speed, Collaboration, and Security</b></h2>\r\n\r\n<b>1- Improved Speed</b>\r\n<br>\r\n<br>\r\n\r\nFabTechSol\'s software development services are designed to help organizations improve their speed of delivery. We leverage DevOps practices such as Continuous Integration/Continuous Delivery (CI/CD) to help our clients release software changes more quickly and with greater reliability.\r\n<br>\r\n\r\n\r\nBy adopting CI/CD, we help our clients reduce the time it takes to deliver software changes. Our developers can focus on writing code, while the automation takes care of building, testing, and deploying the software. This can help our clients release software changes more quickly and with greater reliability.\r\n<br>\r\n\r\n<b>2- Collaboration</b>\r\n<br>\r\n<br>\r\n\r\nAt FabTechSol, we believe that collaboration is key to successful software development. That\'s why we adopt a cross-functional team approach, bringing together developers, operations staff, and other stakeholders to work collaboratively on software development.\r\nBy adopting cross-functional teams, we help our clients improve collaboration between development and operations teams. This can help to reduce silos and ensure that all stakeholders are involved in the software development process from start to finish. This can help to improve the quality and reliability of the software.\r\n<br>\r\n<br>\r\n\r\n<b>3- Security</b>\r\n<br>\r\n<br>\r\n\r\nSecurity is a top priority for us at FabTechSol. We integrate Security as Code practices into our software development process to ensure that security is a first-class citizen from the very beginning.\r\n<br>\r\n\r\nBy adopting Security as Code, we help our clients ensure that security is a priority throughout the development process. This can help to reduce the risk of security vulnerabilities and ensure that the software is secure and reliable.\r\n<br>\r\n<br>\r\n\r\n<b>4- Services</b>\r\n<br>\r\n<br>\r\n\r\nAt FabTechSol, we offer a range of software development services to help our clients achieve their business goals. Our services include:\r\n1- Custom Software Development: We work closely with our clients to understand their unique business needs and develop custom software solutions that meet those needs.\r\n2- Mobile App Development: We develop mobile apps for iOS and Android platforms, helping our clients reach their customers wherever they are.\r\n3- Web Development: We develop web applications using modern frameworks and technologies, helping our clients provide their customers with a seamless online experience.\r\n4- Cloud Computing: We help our clients leverage the power of cloud computing to reduce costs and improve scalability.\r\n5- DevOps Consulting: We provide DevOps consulting services to help our clients adopt DevOps practices and improve their software development process.\r\nOverall, our services are designed to help our clients achieve their business goals and gain a competitive advantage in the marketplace. By adopting DevOps practices, we help our clients improve their speed, collaboration, and security, ultimately leading to greater success for their business.\r\n', 'Benefits of DevOps Practices', 'Benefits of DevOps Practices', 'Benefits of DevOps Practices', 'Improving Speed, Collaboration and Security with DevOps Practices - FabTechSol', 'Discover how FabTechSol\'s software development services align with DevOps practices to help organizations improve their speed, collaboration, and security. Learn about our range of services, including custom software development, mobile app development, web development, cloud computing, and DevOps consulting.', 'https://fabtechsol.com/blog/improving-speed-collaboration-and-security-with-devops-practices/'),
(31, ' Security in Application Development: Best Practices to Keep Your App Safe', '../upload/20230327_072609_B--01.jpg', 'In today\'s digital age, application development has become an integral part of the software development lifecycle. However, with the increase in the number of applications being developed, there is also a corresponding increase in the number of security threats that these applications face. Cybercriminals are constantly finding new ways to exploit vulnerabilities in applications to gain unauthorized access to sensitive data. To protect your application from such attacks, it is essential to follow best practices for security in application development.\r\n<br>\r\n<br>\r\n\r\nIn this blog, we will discuss some of the best practices for security in application development that you can implement to keep your app safe.\r\n\r\n<h2><b>Authentication and Authorization</b></h2>\r\n\r\nOne of the most critical aspects of application security is authentication and authorization. Authentication ensures that the user who is accessing the application is who they claim to be. Authorization, on the other hand, ensures that the user has the necessary permissions to access specific features or resources within the application.\r\n<h2><b>Use Strong Authentication Mechanisms</b></h2>\r\n\r\n\r\nTo prevent unauthorized access to your application, it is crucial to use strong authentication mechanisms. Passwords are the most common authentication mechanism used in applications, but they can be easily compromised if not implemented correctly. It is best to use multi-factor authentication mechanisms that use a combination of something the user knows (such as a password), something the user has (such as a security token), and something the user is (such as biometric authentication).\r\n\r\n<h2><b>Implement Role-Based Access Control</b></h2>\r\n\r\n\r\nRole-based access control is an authorization mechanism that restricts access to specific features or resources based on the user\'s role within the application. This mechanism ensures that users only have access to the resources that are necessary for their job function. Implementing role-based access control helps to minimize the risk of unauthorized access to sensitive data and resources within the application.\r\nMain Heading: Secure Coding Practices\r\nSecure coding practices are essential for building applications that are resistant to security threats. When developing an application, it is essential to consider the security implications of every line of code that is written. Here are some secure coding practices that you should follow to keep your application safe.\r\n\r\n<br>\r\n<br>\r\n <b>Input Validation</b>\r\n<br>\r\n<br>\r\n\r\nInput validation is the process of verifying and sanitizing input data to ensure that it is safe for the application to use. Many security breaches occur due to the lack of input validation, as attackers can inject malicious code into the application by exploiting input fields. It is essential to validate all user input, including form data, query strings, and cookies, to prevent such attacks.\r\n<br>\r\n<br>\r\n<b>Error Handling</b>\r\n<br>\r\n<br>\r\n\r\nError handling is a crucial part of application development, as it helps to identify and fix errors that occur within the application. However, error handling can also be used as a vector for attacks if not implemented correctly. It is essential to handle errors securely by providing minimal information to the user and logging detailed error messages to help diagnose and fix issues.\r\n\r\n<h2><b>Avoid Hard-Coding Sensitive Information</b></h2>\r\n\r\n\r\nHard-coding sensitive information, such as passwords or API keys, within the application code is a severe security risk. If an attacker gains access to the application code, they can easily extract this information and use it to launch attacks. Instead, it is best to store sensitive information in a secure location, such as a configuration file or a key vault, and access it securely within the application code.\r\n\r\n', '../upload/20230327_072609_B--02.jpg', '<h2><b>Regular Updates and Patching</b></h2>\r\n\r\n\r\nRegular updates and patching are essential for keeping your application safe from the latest security threats. As new vulnerabilities are discovered, software vendors release patches to address these issues. Failing to apply these patches can leave your application vulnerable to attacks.\r\n<br>\r\n<br>\r\n<b>Keep Your Software Up-to-Date</b>\r\n<br>\r\n<br>\r\n\r\nKeeping your software up-to-date is essential for ensuring that your application is protected against the latest security threats. It is best to set up automated updates for your application and its dependencies, such as operating systems and libraries, to ensure that you are always running the latest version with the latest security patches.\r\n<br>\r\n<br>\r\n<b>Test and Verify Updates Before Deployment</b>\r\n\r\n<br>\r\n<br>\r\nBefore deploying any updates, it is essential to test and verify them thoroughly to ensure that they do not introduce new security vulnerabilities. This testing should include both functional testing and security testing, such as penetration testing and vulnerability scanning.\r\n<br>\r\n<br>\r\n <b>Data Encryption</b>\r\n<br>\r\n<br>\r\nData encryption is the process of converting sensitive data into an unreadable format, which can only be decrypted using a secret key. Encryption is an essential security measure that helps to protect sensitive data in transit and at rest.\r\n<br>\r\n<br>\r\n<b>Use Strong Encryption Algorithms</b>\r\n<br>\r\n<br>\r\nWhen encrypting data, it is essential to use strong encryption algorithms that are resistant to attacks. AES (Advanced Encryption Standard) is currently the most widely used encryption algorithm and is considered to be secure against attacks.\r\n<br>\r\n<br>\r\n<b>Implement Key Management Practices</b>\r\n<br>\r\n<br>\r\nKey management is the process of securely generating, storing, and distributing encryption keys. It is essential to implement key management practices to ensure that encryption keys are not compromised. This includes using strong passwords for key storage, regularly rotating encryption keys, and using a secure key management system.\r\n\r\n<h2><b> Security Testing</b></h2>\r\n\r\nSecurity testing is an essential part of application development that helps to identify and fix security vulnerabilities before they can be exploited by attackers. Security testing includes both manual and automated testing techniques and should be performed throughout the software development lifecycle.\r\n\r\n<br>\r\n<br>\r\n<b>Penetration Testing</b>\r\n\r\n<br>\r\n<br>\r\nPenetration testing, also known as pen testing, is a type of security testing that involves simulating an attack on the application to identify vulnerabilities. Penetration testing should be performed by a qualified third-party tester who has the necessary skills and experience to identify potential security risks.\r\n<br>\r\n<br>\r\n<b>Vulnerability Scanning</b>\r\n\r\n<br>\r\n<br>\r\nVulnerability scanning is an automated testing technique that involves scanning the application for known security vulnerabilities. Vulnerability scanning should be performed regularly, preferably daily, to identify potential security risks.\r\n\r\n <h2><b>Secure Network Communication</b></h2>\r\n\r\n\r\nSecure network communication is essential for protecting sensitive data in transit. When transmitting data over a network, it is essential to ensure that it is encrypted and transmitted securely.\r\n<br>\r\n<br>\r\n<b>Use Secure Protocols</b>\r\n\r\n<br>\r\n<br>\r\nWhen transmitting data over a network, it is essential to use secure protocols, such as HTTPS, that encrypt the data in transit. Insecure protocols, such as HTTP, transmit data in clear text, making it vulnerable to interception by attackers.\r\n<br>\r\n<br>\r\n<b>Implement Network Security Controls</b>\r\n<br>\r\n<br>\r\n\r\nImplementing network security controls, such as firewalls, intrusion detection systems, and network segmentation, can help to prevent unauthorized access to your application and its data. Network security controls should be configured correctly to ensure that they are providing adequate protection against potential threats.\r\n<br>\r\n<br>\r\n\r\nApplication security is a critical aspect of the software development lifecycle that should not be overlooked. By following best practices for security in application development, you can help to protect your application from potential security threats. The best practices discussed in this blog include authentication and authorization, secure coding practices, regular updates and patching, data encryption, security testing, and secure network communication. By implementing these best practices, you can help to keep your application safe from potential security threats and provide your users with a secure and reliable experience.\r\n', '../upload/20230327_072609_B--03.jpg', '<h2><b>FabTechSol: Prioritizing Security Throughout the Software Development Lifecycle</b></h2>\r\nFabTechSol is a software development company that understands the importance of security in application development. With a team of experienced developers and security experts, FabTechSol is dedicated to delivering secure and reliable software solutions that meet the highest standards of quality.\r\n<br>\r\n<br>\r\nAt FabTechSol, we prioritize security throughout the software development lifecycle, from initial design to final deployment. We follow best practices for authentication and authorization, ensuring that our applications are only accessible to authorized users with appropriate permissions. We also use secure coding practices, such as input validation and error handling, to prevent common security vulnerabilities like SQL injection and cross-site scripting (XSS).\r\nOur team understands the importance of regular updates and patching, and we work diligently to ensure that our applications and dependencies are up-to-date with the latest security patches. We also test and verify updates thoroughly to ensure that they do not introduce new security vulnerabilities.\r\n<br>\r\n<br>\r\n\r\nFabTechSol also prioritizes data encryption, using strong encryption algorithms and key management practices to protect sensitive data in transit and at rest. Our team is experienced in security testing techniques like penetration testing and vulnerability scanning, ensuring that our applications are thoroughly tested for security vulnerabilities before deployment.\r\n<br>\r\n<br>\r\nFinally, we use secure network communication practices, such as HTTPS and network security controls like firewalls and intrusion detection systems, to protect our applications and their data from unauthorized access.\r\n<br>\r\n<br>\r\nAt FabTechSol, we take security seriously and prioritize it throughout the software development lifecycle. We are committed to delivering secure and reliable software solutions that meet the highest standards of quality.\r\n', ' Security in Application Development', 'Regular Updates and Patching', 'FabTechSol: Prioritizing Security', 'Building Secure Apps: Best Practices for Application Development - FabTechSol', 'Find out how to build secure applications with these essential best practices. FabTechSol prioritizes security throughout the software development lifecycle, implementing measures like authentication and authorization, secure coding, and regular updates and patching.', 'https://fabtechsol.com/blog/building-secure-apps-best-practices-for-application-development/');
INSERT INTO `blog_main` (`id`, `title`, `img1`, `des1`, `img2`, `des2`, `img3`, `des3`, `img1_alt`, `img2_alt`, `img3_alt`, `meta_title`, `meta_des`, `meta_con`) VALUES
(32, 'The Importance of User Experience in Application Development', '../upload/20230411_144812_b4a.jpg', 'User experience (UX) has become a crucial element in application development. As the digital landscape becomes more competitive, providing a great user experience can be the key differentiator that sets your app apart from the rest. This blog will discuss why UX is important in application development and how you can create an exceptional user experience for your customers.<h2><b>What is User Experience (UX)?</b></h2>User experience (UX) is the overall experience a user has when interacting with a product, such as a website or an app. UX encompasses everything from how easy it is to navigate the interface to how quickly the app responds to user inputs. A great user experience is intuitive, seamless, and engaging, and it can help users achieve their goals quickly and efficiently.<h2><b>Why is UX Important in Application Development?</b></h2><b>1- Increased User Satisfaction</b><br><br>A good UX can increase user satisfaction by making it easy for them to achieve their goals quickly and efficiently.<br>Users are more likely to return to an app if they have a positive experience using it.<br>Positive word-of-mouth from satisfied users can help increase app downloads and attract new users.<br><br><b>2- Competitive Advantage</b><br><br>With so many apps available in the app stores, providing a great UX can be the key differentiator that sets your app apart from the competition.<br>An app with a great UX is more likely to receive positive reviews and ratings, which can help attract new users.<br><br><b>3- Increased User Engagement</b><br><br>A great UX can increase user engagement by making the app more enjoyable to use.<br>Users are more likely to spend more time in the app and interact with it more frequently if they find it enjoyable and engaging.<br><br><b>4- Improved Conversion Rates</b><br><br>A great UX can improve conversion rates by making it easier for users to complete a desired action, such as making a purchase or signing up for a service.<br>Users are more likely to complete a desired action if the process is intuitive and easy to follow.', '../upload/20230411_144812_b4b.jpg', '<h2><b>Creating an Exceptional User Experience</b></h2>Creating an exceptional user experience requires careful planning and attention to detail. Here are some best practices for creating a great UX in your app:<br><br><b>Conduct User Research</b><br><br>Before you begin designing your app, it\'s important to conduct user research to understand your target audience\'s needs and behaviors. User research can help you identify pain points and areas for improvement, which can guide your design decisions.<br><br><b>Focus on Usability</b><br><br>Usability is a critical component of a great UX. Your app should be easy to navigate, with clear and intuitive interfaces. Use standard design patterns and conventions to help users understand how to interact with your app.<br><br><b>Provide Feedback</b><br><br>Feedback is an important part of the user experience. Your app should provide clear and immediate feedback when a user performs an action, such as confirming that a form has been submitted or providing an error message if a field is filled out incorrectly.<br><br><b>Design for Mobile</b><br><br>Mobile devices are becoming the primary way that users interact with apps. Design your app with mobile users in mind, making sure that the interface is optimized for smaller screens and touch interactions.<br><br><b>Test, Test, Test</b><br><br>Testing is an essential part of the app development process. Conduct usability testing with real users to identify areas for improvement and refine your design decisions.<br><br><b>Continuously Improve</b><br><br>A great UX is never finished. Monitor user feedback and analytics to identify areas for improvement and make continuous updates to your app to ensure that it is meeting your users\' needs.<br><br>User experience is a critical component of app development. A great UX can increase user satisfaction, provide a competitive advantage, increase user engagement, and improve conversion rates. To create an exceptional user experience, it\'s important to conduct user research, focus on usability, provide feedback, design for mobile, test, and continuously improve your app. By paying attention to these best practices, you can create an app that provides a great user experience and stands out in a crowded marketplace.<br><br>In conclusion, UX is no longer just an optional component of application development, but rather a fundamental requirement. An app with a poor user experience is unlikely to be successful, while one with an exceptional user experience has the potential to become a user\'s go-to app. By focusing on the user experience, you can create an app that users love to use, and that stands out in a crowded marketplace.<br><br>User experience (UX) design has become increasingly important in application development as digital products have become more prevalent in our lives. In fact, the quality of the UX can often be the difference between an app\'s success and failure. Here are a few more reasons why UX is so important:<br><br><b>1. Increased Revenue:</b> A positive user experience can lead to increased revenue for your app or business. When users are satisfied with their experience, they are more likely to make purchases or sign up for your services. Additionally, they are more likely to recommend your app to others, which can help you grow your user base.<br><br><b>2. Reduced Development Costs:</b> By investing in UX early in the development process, you can avoid costly redesigns and updates later on. A well-designed UX can help you avoid problems before they occur and save you time and money in the long run.<br><br><b>3. Improved User Retention:</b> A great UX can help you retain users over time. When users have a positive experience using your app, they are more likely to continue using it and recommending it to others.<br><br><b>4. Enhanced Brand Reputation:</b> A positive user experience can enhance your brand reputation and help you stand out in a crowded marketplace. When users have a great experience with your app, they are more likely to trust your brand and be loyal to it.<br><br><b>5. Increased Accessibility:</b> By designing for accessibility, you can make your app available to a wider audience. For example, users with visual impairments may be able to use your app if you provide alternative text for images or use larger font sizes.<br><br>To achieve a great UX, it\'s important to understand your users\' needs and behaviors. This can be achieved through user research and testing, which can help you identify pain points and areas for improvement. It\'s also important to focus on usability, providing feedback, designing for mobile, and continuously improving your app based on user feedback.<br><br>In summary, a great UX is essential for the success of any digital product. By investing in UX early on in the development process and continuously improving it based on user feedback, you can create an app that users love to use and that stands out in a crowded marketplace.', '../upload/20230411_144812_b4c.jpg', '<h2><b>Fabtechsol: Delivering Exceptional User Experience in Custom Software Development</b></h2>Fabtechsol, being a custom software development company, understands the importance of user experience in application development. The team at Fabtechsol believes that every software application should be designed with the user in mind. By prioritizing user experience, Fabtechsol creates custom software solutions that meet the unique needs of its clients while ensuring a great user experience.<br><br>Fabtechsol\'s software development process starts with user research and testing to ensure that the final product meets the needs of its target audience. The team then focuses on usability, providing feedback, designing for mobile, and continuously improving the app based on user feedback.<br><br>One of Fabtechsol\'s strengths is its ability to design and develop custom software solutions that are not only functional but also aesthetically pleasing. By providing a great user experience, the company helps its clients improve customer satisfaction, increase user retention, and ultimately drive revenue growth.<br><br>In addition, Fabtechsol places a strong emphasis on accessibility in its software development process. The team ensures that its applications are accessible to all users, regardless of their abilities. This not only helps the company\'s clients reach a wider audience but also makes a positive impact on society as a whole.<br><br>Fabtechsol\'s dedication to user experience and accessibility has earned it a reputation as a trusted software development partner for businesses of all sizes. Whether a client needs a custom mobile app, web application, or enterprise software solution, Fabtechsol is committed to delivering a product that meets their needs and exceeds their expectations.<br><br>In conclusion, Fabtechsol is a custom software development company that recognizes the importance of user experience in application development. By prioritizing user experience and accessibility, the company creates custom software solutions that help its clients improve customer satisfaction, increase user retention, and drive revenue growth.', 'The Importance of User Experience', 'Creating an Exceptional User Experience', 'Fabtechsol: Delivering Exceptional User Experience', 'User Experience in App Development - fabtechsol', 'Discover why user experience (UX) is essential in application development and how Fabtechsol, a leading custom software development company, prioritizes UX to create software solutions that drive revenue growth and improve customer satisfaction.', 'importance-of-user-experience-in-app-development'),
(33, 'Serverless Computing for Application Development: Advantages and Challenges', '../upload/20230411_144554_b3-a.jpg', 'Serverless Computing for Application Development: Advantages and ChallengesIn recent years, serverless computing has gained popularity among developers as a way to build and deploy applications without having to manage the underlying infrastructure. Serverless computing, also known as Function-as-a-Service (FaaS), is a cloud computing model that enables developers to run their code in the cloud without having to worry about the server infrastructure. In this blog post, we will discuss the advantages and challenges of using serverless computing for application development.', '../upload/20230411_144554_b3-b.jpg', '<h2><b>Advantages of Serverless Computing</b></h2><b>Cost-Effective</b><br><br>One of the significant advantages of serverless computing is that it is cost-effective. With serverless computing, you only pay for the amount of compute time and resources that your application uses. This pay-as-you-go pricing model eliminates the need to pay for idle resources, which can significantly reduce your infrastructure costs. Moreover, serverless computing services such as AWS Lambda, Microsoft Azure Functions, and Google Cloud Functions offer a free tier, which allows developers to try out their applications for free.<br><br><b>Scalability</b><br><br>Scalability is another significant advantage of serverless computing. Serverless computing services automatically scale your application in response to changes in demand, without requiring any manual intervention. This means that your application can handle sudden spikes in traffic without experiencing any downtime. Furthermore, serverless computing services can scale down your application when the demand drops, reducing the overall cost of running your application.<br><br><b>Faster Time to Market</b><br><br>Serverless computing allows developers to focus on writing code and building applications, rather than managing infrastructure. This can significantly reduce the time it takes to develop and deploy applications, allowing businesses to get their products to market faster. Furthermore, serverless computing services such as AWS Lambda, Microsoft Azure Functions, and Google Cloud Functions offer pre-built templates and integrations that can further speed up the development process.<br><br><b>Reduced Management Overhead</b><br><br>With serverless computing, developers do not have to manage the underlying infrastructure, which can reduce management overhead significantly. Serverless computing services handle tasks such as server maintenance, patching, and operating system updates, allowing developers to focus on writing code and building applications.<br><br><b>Increased Flexibility</b><br><br>Serverless computing offers increased flexibility, as it enables developers to choose the programming language, runtime environment, and development tools that best fit their application. Moreover, serverless computing services can be integrated with other cloud services, such as storage, messaging, and databases, providing developers with a flexible and powerful platform for building applications.<h2><b>Challenges of Serverless Computing</b></h2><b>Cold Start Latency</b><br><br>One of the significant challenges of serverless computing is cold start latency. Cold start latency refers to the time it takes for a serverless function to start up when it has not been used for a while. This latency can cause delays in the application response time, which can be a problem for applications that require low latency. However, this challenge can be mitigated by using techniques such as function warm-up, where functions are executed periodically to keep them warm.<br><br><b>Limited Control Over the Infrastructure</b><br><br>With serverless computing, developers have limited control over the underlying infrastructure, which can be a challenge for some applications. For example, serverless computing services may impose restrictions on the amount of memory, CPU, and network resources that can be used by a function. This can limit the performance of applications that require high computational power.<br><br><b>Debugging and Testing</b><br><br>Debugging and testing serverless applications can be a challenge, as developers do not have access to the underlying infrastructure. Serverless computing services typically provide limited visibility into the execution environment, making it difficult to diagnose and fix issues.<br><br><b>Vendor Lock-In</b><br><br>Another challenge of serverless computing is vendor lock-in. Since serverless computing services are provided by cloud providers such as AWS, Microsoft, and Google, developers may find it challenging to switch to a different provider if they want to. Moreover, serverless computing services often have proprietary APIs and interfaces, which can make it difficult to migrate applications to other cloud providers.<br><br><b>Security and Compliance</b><br><br>Security and compliance are critical concerns for any application, and serverless computing is no exception. Serverless computing services may have their security and compliance requirements, which can be a challenge for developers to meet. Furthermore, serverless functions may be vulnerable to attacks such as injection attacks and privilege escalation, which can compromise the security of the application.<br><br>Serverless computing offers many advantages for application development, including cost-effectiveness, scalability, faster time to market, reduced management overhead, and increased flexibility. However, serverless computing also poses several challenges, including cold start latency, limited control over the infrastructure, debugging and testing, vendor lock-in, and security and compliance.<br><br>As with any technology, it is essential to evaluate the benefits and challenges of serverless computing before deciding to use it for application development. Serverless computing is not suitable for every application, and developers should carefully consider the requirements of their application before choosing a serverless computing platform. By understanding the advantages and challenges of serverless computing, developers can make informed decisions and build better applications.', '../upload/20230411_144554_b3c.jpg', '<h2><b>FabTechSol: A Software Development Company</b></h2>FabTechSol is a software development company that specializes in creating custom software solutions for businesses. With a focus on using the latest technologies and methodologies, FabTechSol helps businesses to build robust and scalable software applications that can help them to streamline their operations, improve productivity, and grow their businesses.<br><br>As a software development company, FabTechSol has a team of experienced developers who are experts in a range of programming languages and technologies. The company\'s developers have expertise in areas such as web development, mobile development, cloud computing, and serverless computing, enabling them to deliver custom software solutions that meet the unique needs of their clients.<br><br>FabTechSol works closely with its clients to understand their business needs and goals, enabling the company to create software solutions that are tailored to their specific requirements. The company follows a rigorous development process that includes planning, design, development, testing, and deployment, ensuring that its software solutions are of the highest quality and meet the needs of its clients.<br><br>One of the key strengths of FabTechSol is its focus on using the latest technologies and methodologies in its software development process. The company is constantly exploring new technologies and techniques, enabling it to deliver software solutions that are innovative, scalable, and efficient. Moreover, the company\'s developers are continuously learning and improving their skills, ensuring that they are up-to-date with the latest trends and best practices in the industry.<br><br>FabTechSol\'s software development services include web development, mobile development, cloud computing, and serverless computing. The company has experience in developing custom software solutions for a range of industries, including healthcare, finance, retail, and logistics.<br><br>In summary, FabTechSol is a software development company that specializes in creating custom software solutions for businesses. With a focus on using the latest technologies and methodologies, the company helps businesses to build robust and scalable software applications that can help them to streamline their operations, improve productivity, and grow their businesses. If you are looking for a reliable and experienced software development partner, FabTechSol is a company that you can trust.', 'Serverless Computing Application Development', 'Advantages of Serverless Computing', 'Software Development Company FabTechSol', 'Serverless Computing for Application Development | fabtechsol', 'Discover the benefits and challenges of serverless computing for application development in this informative blog by FabTechSol, a leading software development company.', 'serverless-computing-for-application-development- advantages-and-challenges'),
(120, 'Developing Mobile Apps with React Native: React Native', '../upload/20230411_143620_b1.jpg', '<b>Introduction</b>Mobile applications have taken over the world, and developers are constantly looking for new ways to make them better. React Native is a popular framework that developers can use to develop mobile applications for both iOS and Android platforms. In this blog post, we will discuss the benefits of using React Native for mobile app development and how it works.<h2><b>What is React Native?</b></h2>React Native is an open-source framework that enables developers to build mobile applications using the same principles as React, a popular web development library. React Native uses JavaScript to build mobile apps, allowing developers to reuse code between different platforms. React Native was first introduced in 2015 by Facebook and has since gained popularity among developers due to its simplicity and ease of use.<br><br><b>Benefits of React Native</b><br><br><b>Code Reusability:</b> React Native allows developers to reuse code between different platforms. This means that developers can write code once and use it on both iOS and Android platforms, saving time and effort.<br><br><b>2- Faster Development:</b> With React Native, developers can create mobile apps faster than using traditional app development methods. This is because React Native allows for hot reloading, which means that developers can see changes in real-time, without having to rebuild the entire app.<br><br><b>3- Simplified UI:</b> React Native uses a declarative approach to UI development, making it easier for developers to create and manage user interfaces. This also means that developers can make changes to the UI without having to write additional code.<br><br><b>4- Strong Community:</b> React Native has a strong community of developers who are constantly contributing to the framework. This means that developers can find help, resources, and examples easily.<br><br><b>5- Cost-effective:</b> React Native is cost-effective as it allows developers to use a single codebase for multiple platforms, reducing the time and effort needed to create a mobile app.', '../upload/20230411_143620_b-2.jpg', '<h2><b>How does React Native work?</b></h2>React Native uses JavaScript to create mobile applications. Developers can use the same principles as React to create components that can be used in both web and mobile applications. React Native uses a virtual DOM (Document Object Model) to manage the app\'s UI. This allows for faster rendering and a smoother user experience.<br><br>React Native also provides access to native platform features, such as camera and GPS, through the use of modules. These modules allow developers to use native APIs without having to write platform-specific code.<br><br><b>Developing a Mobile App with React Native</b><br><br><b>Setting up the Environment:</b><br><br> To start developing a mobile app with React Native, developers need to set up their development environment. This involves installing Node.js, React Native CLI, and an Android/iOS emulator or device.<br><br><b>Creating a new project:</b><br><br> Once the development environment is set up, developers can create a new React Native project using the command line interface. This will generate the necessary files and folders needed to start developing the app.<br><br><b>Writing code:</b><br><br> Developers can start writing code for the app using a text editor or an integrated development environment (IDE). React Native uses JavaScript, so developers should be familiar with the language.<br><br><b>Running the app:</b><br><br> To see the app in action, developers can run it on an Android or iOS emulator or device. React Native provides a tool called Expo that makes it easy to run the app on a physical device.Testing and Debugging: Testing and debugging are important parts of the development process. React Native provides tools like React Native Debugger and Expo CLI to help developers test and debug their apps.<br><br>React Native is a popular framework that allows developers to build mobile applications for both iOS and Android platforms using JavaScript. It offers benefits such as code reusability, faster development, simplified UI, and a strong community. To develop a mobile app with React Native, developers need to set up their development environment, create a new project, write code, run the app, and test and debug it. With React<h2><b>React Native vs. Native Development:</b></h2> One of the main advantages of React Native is that it allows for cross-platform development, meaning that you can write code once and deploy it on both iOS and Android. However, this comes at a cost of reduced performance and a potentially limited access to native features. If you need to build a very performant app or one that requires specific native features, then native development may be a better choice.<br><br><b>UI Components:</b><br><br> React Native comes with a set of pre-built UI components that can be used to build user interfaces. These components include buttons, text inputs, sliders, and more. In addition, there are many third-party libraries that provide additional UI components that can be easily integrated into your app.<br><br><b>Expo:</b><br><br> Expo is a set of tools and services that makes it easier to develop and deploy React Native apps. Expo includes a development environment, a mobile app that can be used to test your app on a physical device, and a cloud-based service for building and deploying your app.<br><br><b>Debugging:</b><br><br> Debugging React Native apps can be challenging, especially when dealing with issues that are specific to a particular platform. React Native provides a tool called React Native Debugger that can be used to debug your app on both iOS and Android platforms.<br><br><b>Performance:</b><br><br> While React Native is generally faster than hybrid app development frameworks like Cordova and Ionic, it may not be as fast as native development. However, there are many techniques and libraries that can be used to improve the performance of React Native apps, such as code splitting, lazy loading, and using native modules.<br><br><b>State Management:</b><br><br> Like React, React Native uses a unidirectional data flow model that makes it easy to manage state in your app. There are many libraries available that can help you manage state, such as Redux and MobX.<br><br><b>Deployment:</b><br><br> Deploying a React Native app can be more complex than deploying a traditional web app. However, there are many tools and services available that can help you deploy your app, such as Microsoft App Center, Expo, and AWS Amplify.<br><br>In conclusion, React Native is a powerful tool for developing mobile apps that can be used on both iOS and Android platforms. It offers many benefits, such as code reusability, simplified UI development, and a strong community. While there are some challenges associated with React Native, such as debugging and performance, these can be mitigated with the use of best practices and third-party libraries. If you are looking to build a mobile app, React Native is definitely worth considering.', '../upload/20230411_143620_b3.jpg', '<h2><b>Fabtechsol: Building High-Quality Mobile Apps with React Native</b></h2>Fabtechsol is a software development company that specializes in building mobile apps using React Native. Our team of experienced developers and designers have worked on numerous projects, ranging from small startups to large enterprises.<br><br>We understand the importance of building high-quality, performant apps that meet the needs of our clients and their users. That\'s why we use React Native as our go-to framework for building mobile apps. React Native allows us to create apps that work seamlessly on both iOS and Android platforms, with a focus on performance and user experience.<br><br>At Fabtechsol, we believe in a collaborative approach to development. We work closely with our clients to understand their business needs, goals, and target audience. We then use this information to develop a custom mobile app that meets their unique requirements.<br><br>Our team has expertise in a range of technologies and tools, including React Native, Redux, Firebase, and AWS Amplify. We use these tools to build scalable, secure, and reliable apps that can handle high traffic and complex workflows.<br><br>We are committed to delivering high-quality work and providing excellent customer service. Our team is always available to answer any questions or concerns that our clients may have throughout the development process and beyond.<br><br>In summary, Fabtechsol is a software development company that specializes in building high-quality mobile apps using React Native. Our team of experienced developers and designers work closely with our clients to develop custom solutions that meet their unique business needs. If you\'re looking to build a mobile app, we\'d love to hear from you!', 'Developing Mobile Apps with React Native', 'How does React Native work', ' High-Quality Mobile Apps with React Native', ' Developing Mobile Apps with React Native - Fabtechsol', 'Discover how Fabtechsol builds high-quality mobile apps using React Native. Learn about the advantages of React Native, UI components, debugging, performance, state management, and deployment in this comprehensive guide.', 'developing-mobile-apps-with-react-native');

-- --------------------------------------------------------

--
-- Table structure for table `blog_meta`
--

CREATE TABLE `blog_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_meta`
--

INSERT INTO `blog_meta` (`id`, `meta_des`) VALUES
(1, 'FABTECHSOL Is A Global Web Design And Development Company That Provides Intelligent, Cost-Effective Web And IT Solutions.');

-- --------------------------------------------------------

--
-- Table structure for table `ceo_msg`
--

CREATE TABLE `ceo_msg` (
  `id` int(11) NOT NULL,
  `msg_title` varchar(255) NOT NULL,
  `msg_des` longtext NOT NULL,
  `ceo_name` varchar(255) NOT NULL,
  `ceo_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ceo_msg`
--

INSERT INTO `ceo_msg` (`id`, `msg_title`, `msg_des`, `ceo_name`, `ceo_img`) VALUES
(13, 'Message from CEO', 'â€œWelcome to Fabulous technology Solutions. Our goal is to pave the way for the advancement of technological progress in the 21st century. As the CEO of Fabtechsol, I am committed to helping this company go from â€œgoodâ€ to â€œgreat.â€ We believe that success comes from Restless\'s focus on innovation and responsible performance. Responsible decisions, responsible practices and responsible relationships are important not only to our development, but also to earning the trust of our customers. Choose your best for success. I\'m sure you\'ll find what you\'re looking for here. Fabtechsol is a leading technology company, now and in the future. We have the global R&D capabilities, digital solutions and innovative focus to support our customers. On behalf of everyone at fabtechsol, I would like to thank you for your trust. I am pleased and proud to be the CEO of such a great company with a bright future. Thank you.\"', 'Engr. Sami Nasim', '../upload/Website-work-change-ceo-picture.ook (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` text NOT NULL,
  `replies` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'hello / hy / A.o.A / AssalamuAlaikum / AssalamoAlaikum/ Assalam-Alaikum', 'Hy there, how can I help you?'),
(4, 'What is fabtechsol/FabTechSol?Tell me about fabtechsol', 'Fabtechsol is a software company that offers software development services for startups, businesses and enterprises. We develop reliable, scalable and secure software for any operating system, browser and device. We bring together deep industry expertise and the latest IT advancements to deliver custom solutions and products that perfectly fit the needs and behavior of their users.'),
(5, 'What does your company do?', 'Our company develops and provides software solutions for businesses in various industries. We specialize in custom software development, mobile app development, and web development.'),
(6, 'What types of businesses do you work with?', 'We work with businesses of all sizes and industries, from small startups to large enterprises. Our clients come from diverse fields such as healthcare, finance, education, and retail.'),
(7, 'Can you help me with a specific software problem?', 'Absolutely! Our team of experts is equipped to handle a wide range of software-related issues. Please provide more details about your specific problem, and we\'ll do our best to assist you.'),
(8, 'How long does it take to develop custom software?', 'The timeline for custom software development can vary depending on the complexity of the project and the client\'s specific requirements. However, our team works efficiently to deliver high-quality software within a reasonable timeframe.'),
(9, 'Do you offer ongoing support and maintenance for your software solutions?', 'Yes, we offer ongoing support and maintenance for all the software solutions we develop. Our team is available to provide assistance and updates as needed to ensure your software runs smoothly and remains up-to-date with the latest technologies.'),
(10, 'How do I get started with fabtechsol?', 'To get started, simply fill out our contact form or give us a call. Our team will be happy to discuss your needs and provide you with a quote for our services.');

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `client_para` text NOT NULL,
  `client_img_alt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`id`, `client_name`, `client_img`, `client_para`, `client_img_alt`) VALUES
(3, 'Ben Nelson', '../upload/90.png', 'Sami was responsive to our requests and quickly answered, regardless of \"local time.\" He was willing to accommodate all of our edits and suggestions, and also provided useful feedback that we hadn\'t thought of.', 'Ben Nelson'),
(5, 'Kristy Ayres', '../upload/feed-back-picture9=.png', 'We are in the very early stage of the project but he\'s been very open and great with communicating during this time.', 'Kristy Ayres'),
(6, 'Johnson Clark', '../upload/feed-back-picture57.png', 'First step of the process is complete and so far coming together greatly. Great development team and weâ€™re continuing to do business with them.', 'Johnson Clark'),
(7, 'Dan Anderson', '../upload/feed-back-picture890.png', 'A++++ Another Great Service Delivered.\r\nWe have worked with Fabtechsol for many years and have always been impressed with their expertise and professionalism. They have been very helpful in helping us with various software development projects, whenever quality work meets our needs. We recommend Fabtechsol for software development projects.', 'Dan Anderson');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `subject`, `msg`, `file`) VALUES
(1, 'Ammar Naeem', 'amarnaeem111@gmail.com', '03044220859', 'Applying for freshy job', 'I am fresh bscs graduate and looking for internship or entry level job', 'upload/ammar_resume.pdf'),
(2, 'Usama siddique', 'uraza426@gmail.com', '+92302 000 8853', 'Applying for Reactjs Website Development (Internship)', 'Dear Sir or Madam, \r\nI hope you are having a wonderful day. Iâ€™m applying for Reactjs Website Development as an internship. My LinkedIn profile is updated and my created projects links are mentioned in my LinkedIn profile. Please find the attachment (CV)', 'upload/Usama _Reactjs_Developer.pdf'),
(3, 'Syed Abdullah', 'syedabdulah6080@gmail.com', '+923147614149', 'Test', 'test Loram\r\njnsafdiuwes yfwdvd safhtd ewgfd ce6f7ocwvefnqe987rfd', 'upload/Mobile-Application.jpg'),
(7, 'Abdullah', 'syedabdullah6080@gmail.com', '0251485032410', 'test', 'test loram \r\nnjsaef yclh gjmhc jagcgcbauyifgcaic.i ljzvxh bcta8tdc78sachbk gc y bacdvafca', ''),
(8, 'Adrienne Parker', 'cexutazen@mailinator.com', '490', 'Placeat enim amet ', 'Aliquam maiores cons', ''),
(9, 'Syed Abdullah', 'syedabdulah6080@gmail.com', '+923147614149', 'Test', 'test Loram\r\njnsafdiuwes yfwdvd safhtd ewgfd ce6f7ocwvefnqe987rfd', 'upload/Mobile-Application.jpg'),
(10, 'Syed Abdullah', 'syedabdulah6080@gmail.com', '+923147614149', 'Test', 'test Loram\r\njnsafdiuwes yfwdvd safhtd ewgfd ce6f7ocwvefnqe987rfd', 'upload/Mobile-Application.jpg'),
(11, 'EL MALOULI Abdelghani', 'a.elmalouli@gmail.com', '212661621793', 'RFQ-For Delivery Application_ MVP- OPTIMA', 'We are seeking a vendor to develop a delivery application for our business. The application will need to be available on both iOS and Android platforms and should be compatible with various screen sizes, but in the first time we have to develop a MVP ( on', 'upload/Schedule Price_OPTIMA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact_hero`
--

CREATE TABLE `contact_hero` (
  `id` int(11) NOT NULL,
  `contact_hero_title` varchar(255) NOT NULL,
  `contact_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_hero`
--

INSERT INTO `contact_hero` (`id`, `contact_hero_title`, `contact_hero_des`) VALUES
(1, 'Contact us', 'Our 24/7 availability is our core of success! We have a support team who is available to discuss your project with you any time according to your timezone. As fabtechsol works with global clients so we have managed our team with multiple shifts to maintain company\'s client-first ideology. You are on this page, definitely you need our service. Get in touch with us and let\'s make your requirements work great!');

-- --------------------------------------------------------

--
-- Table structure for table `contact_meta`
--

CREATE TABLE `contact_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_meta`
--

INSERT INTO `contact_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions experts are available 24/7 to respond to your questions, to hop on zoom call if needed, to discuss your project requirements. Why to wait? Just fill the form aside or use the number provided bellow.');

-- --------------------------------------------------------

--
-- Table structure for table `core_value_box`
--

CREATE TABLE `core_value_box` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `core_value_box`
--

INSERT INTO `core_value_box` (`id`, `heading`, `des`) VALUES
(7, 'Integrity', 'We are loyal and committed and do what is expected of us even if it takes going an extra mile.'),
(8, 'Transparency', 'We are transparent about our business practice and dealings with all stakeholders.'),
(9, 'Productivity', 'We avoid distractions and ensure maximum productivity in our operations.'),
(10, 'Confidentiality', 'We value the confidentiality of the information entrusted to us by clients and candidates.');

-- --------------------------------------------------------

--
-- Table structure for table `courses_hero`
--

CREATE TABLE `courses_hero` (
  `id` int(11) NOT NULL,
  `course_hero_title` text NOT NULL,
  `course_hero_des` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_hero`
--

INSERT INTO `courses_hero` (`id`, `course_hero_title`, `course_hero_des`) VALUES
(1, 'Free Courses', 'Welcome to FabTechSol, your one-stop destination for free online courses! We believe in the power of education and strive to make it accessible to everyone. Our platform offers a wide range of courses in various fields, taught by experienced professionals. From technology and programming to creative arts and humanities, you\'ll find something for everyone. Our courses are designed to be self-paced, allowing you to learn at your own convenience. Join a vibrant community of learners from around the world, and gain new skills and knowledge that will help you reach your goals.');

-- --------------------------------------------------------

--
-- Table structure for table `courses_main`
--

CREATE TABLE `courses_main` (
  `course_id` int(11) NOT NULL,
  `course_title` text NOT NULL,
  `course_des` text NOT NULL,
  `course_image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_main`
--

INSERT INTO `courses_main` (`course_id`, `course_title`, `course_des`, `course_image`) VALUES
(5, 'Website development course', 'FabTechSol provides a comprehensive, free website development course. Covering fundamental concepts such as HTML, CSS, and JavaScript, as well as advanced topics like responsive design and server-side programming. Join our supportive community of learners and expert instructors to start building your web development skills today', '../upload/service-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_form`
--

CREATE TABLE `course_form` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `number` int(11) NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `course_name` text NOT NULL,
  `st_time` text NOT NULL,
  `days` text NOT NULL,
  `date` text NOT NULL,
  `end_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `main_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_heading`
--

CREATE TABLE `events_heading` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_heading`
--

INSERT INTO `events_heading` (`id`, `heading`, `sub_heading`) VALUES
(1, 'Our Events', 'Innovative events for tech enthusiasts');

-- --------------------------------------------------------

--
-- Table structure for table `events_hero`
--

CREATE TABLE `events_hero` (
  `id` int(11) NOT NULL,
  `event_hero_title` varchar(255) NOT NULL,
  `event_hero_des` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_hero`
--

INSERT INTO `events_hero` (`id`, `event_hero_title`, `event_hero_des`) VALUES
(1, 'Our Events', 'Welcome To Our Events Page! At FabTechSol, We Believe In Fostering A Community Of Like-Minded Individuals Who Share A Passion For Technology And Innovation. Our Events Are Designed To Bring Together Industry Experts, Thought Leaders, And Aspiring Professionals To Discuss The Latest Trends, Share Insights, And Collaborate On Exciting Projects. From Hackathons To Workshops, Our Events Offer A Unique Opportunity To Connect With Others Who Are Passionate About Software Development. Join Us And Be A Part Of The Conversation.');

-- --------------------------------------------------------

--
-- Table structure for table `events_imgs`
--

CREATE TABLE `events_imgs` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_meta`
--

CREATE TABLE `events_meta` (
  `id` int(11) DEFAULT NULL,
  `meta_des` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_meta`
--

INSERT INTO `events_meta` (`id`, `meta_des`) VALUES
(NULL, 'Stay up-to-date with the latest trends and connect with like-minded professionals at FabTechSol\'s software development events.');

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE `expert` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `btn_name` varchar(255) NOT NULL,
  `btn_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expert`
--

INSERT INTO `expert` (`id`, `heading`, `des`, `btn_name`, `btn_link`) VALUES
(1, 'Talk with our expert and get you project done.', 'Still planning to get started with us? Don\'t wait, get in touch with us. Our IT experts are available 24/7 to respond to your questions, to hop on zoom call if needed, to discuss your project requirements. Why to wait? Just click get started button bellow or use the number provided aside!', 'Get Started', 'contact-us');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(3, 'What Service Are You Providing?', 'Fabtechsol\'s Major Services: IT Consultancy, <a href=\"https://fabtechsol.com/software-dev-service\">Software Development </a>Custom Bespoke Solutions, Web Solutions, Ecommerce <a href=\"https://fabtechsol.com/web-dev-service.php\">Web Development</a>, Web <a href=\"https://fabtechsol.com/app-dev-service\">Application Development</a>, Software Development, Search Engine Optimization (SEO), Mobile Applications Development, <a href=\"https://fabtechsol.com/ui-ux-service\">Ui UX Design</a>.'),
(4, 'Can we see your Portfolio?', 'Yes, you can visit our website and check the <a href=\"https://fabtechsol.com/project\">portfolio</a>. We are proud of the work. We have worked for various customers. We design and build websites, develop customer-oriented applications and create custom softwares from customer requirements. For Portfolio Click the given link: <a href=\"https://fabtechsol.com/project\">fabtechsol.com/project</a>'),
(7, 'How much time do you need for building any Project?', 'The time required to deliver a product depends on the scope of the project and the type of product that will be built. We start cooperation with the concept stage of the project to understand the productâ€™s needs and determine what is the proper way to develop it. After that, we are able to estimate the duration of product development.'),
(8, 'What details should I provide in a project specification?', 'There are no specific guidelines. All you have to do is tell us what product you want to build and what functionalities you need.'),
(9, 'How can I be sure you work on my project as much as you declare?', 'We thoroughly monitor our developers and control how much time they spend on each task down to the exact minute.'),
(10, 'How can we schedule a meeting for project?', 'We have created our own chat module for project requirements understanding, monitoring and one to one comunication, you can simply use this link https://fabtechsol-ca1dc.web.app/#/ to signup and chat with admin. Share your meeting agenda on WhatsApp <a href=\" https://api.whatsapp.com/send?phone=923475879566\">+92 347 5879566</a> or on email: <a href=\"mailto:info@gmail.com\">info@fabtechsol.com</a> . One of our team member will schedule it. Or you can simply fill contact us form.'),
(11, 'If we need more information so where we can contact you?', 'You can reach us on any platform following these details: Whatsapp: <a href=\" https://api.whatsapp.com/send?phone=923475879566\">+92 347 5879566</a> Email:  <a href=\"mailto:info@gmail.com\">info@fabtechsol.com</a>'),
(12, 'What is your working hours?', 'We are available 24/7 as we have multiple teams and multiple office timings.');

-- --------------------------------------------------------

--
-- Table structure for table `hired_hero`
--

CREATE TABLE `hired_hero` (
  `id` int(11) NOT NULL,
  `hired_hero_title` varchar(255) NOT NULL,
  `hired_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hired_hero`
--

INSERT INTO `hired_hero` (`id`, `hired_hero_title`, `hired_hero_des`) VALUES
(1, 'Get Hired', '');

-- --------------------------------------------------------

--
-- Table structure for table `hired_meta`
--

CREATE TABLE `hired_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hired_meta`
--

INSERT INTO `hired_meta` (`id`, `meta_des`) VALUES
(1, 'Join our team! We are hiring the highly intelacuals and talented developers around the Sialkot city.');

-- --------------------------------------------------------

--
-- Table structure for table `hiring_form`
--

CREATE TABLE `hiring_form` (
  `id` int(11) NOT NULL,
  `apply` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `st_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `exp_sal` int(11) NOT NULL,
  `skill_set` varchar(255) NOT NULL,
  `upload_app` varchar(255) NOT NULL,
  `server_set` varchar(255) NOT NULL,
  `extra_skill` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `year_passed` int(11) NOT NULL,
  `university` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `p_salary` int(11) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `leaving_reason` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hiring_form`
--

INSERT INTO `hiring_form` (`id`, `apply`, `days`, `st_time`, `end_time`, `fname`, `lname`, `number`, `email`, `city`, `state`, `religion`, `ref`, `field`, `exp_sal`, `skill_set`, `upload_app`, `server_set`, `extra_skill`, `degree`, `qualification`, `cgpa`, `year_passed`, `university`, `experience`, `job_title`, `company`, `p_salary`, `start`, `end`, `leaving_reason`, `cv`, `pic`, `des`, `date`) VALUES
(12, 'internship', '', '', '', 'Haseeb ', 'Hussain ', '0315-5814107', 'Haseebhussain531158@gmail.com', 'Islamabad', 'Islamabad', 'Islam', 'Social media ', 'website-developer', 40000, 'HTML, css, JavaScript, Python', '', 'SQL, MySQL', 'Photoshop', 'graduated', 'BsCs', '3.01', 2022, 'FUUAST ', 0, '', '', 0, '', '', '', 'upload/inbound6356310723036251807.pdf', 'upload/inbound1790299949450176595.jpg', 'I have done BSCS i am fresh graduate i need a platform where i can improve my skills i have an ability to do any type of work related to computer field i have an ability to achive years of wokr in months.i am looking forward for your response \r\nThanks ', '0000-00-00'),
(13, 'onsite', '', '', '', 'Muhammad', 'Habib', '03054868582', 'mhwriter1@gmail.com', 'Lahore', 'Punjab', '', 'Facebook', 'human-resource-manager', 75000, '', '', '', '', 'graduated', 'BS (Hons) English', '2.97', 2021, 'Punjab University Lahore', 4, 'Human Resource Manager ', 'Xperts Sol', 65000, '2018-01-07', '2022-11-09', 'Bad salary timings ', 'upload/Muhammad Habib.pdf', 'upload/hhhhhhhhhhhhh.png', 'I am a passionate writer and also have a sales experience in the international market for digital marketing services. My main concern in the company is to perform HR management services but I also cover other deeds as well including content writing and te', '0000-00-00'),
(14, 'onsite', '', '', '', 'Talha', 'ILYAS ', '03174010095', 'talhailyas220@gmail.com', 'Lahore', 'Punjab', 'Islam', 'Facebook ', 'human-resource-manager', 60000, '', '', '', '', 'graduated', 'Bs Accounting and Finance ', '3.2', 2022, 'Superior university ', 2, 'Branch Manager ', 'Eak Solar ', 48000, '2020-04-14', '2022-09-05', 'The Lahore office was shifted to Islamabad ', 'upload/Mr Talha ILYAS CV (1)1.pdf', 'upload/IMG_20221104_184210.jpg', 'Task and duties centeric ', '0000-00-00'),
(15, 'onsite', '', '', '', 'Usama', 'Yousaf ', '03461479447', 'usamachattha09@gmail.com', 'Gujranwala', 'Punjab', 'Islam', '', 'human-resource-manager', 45000, '', '', '', '', 'graduated', 'BBA(hons)', '2.53', 2021, 'University of Sargodha ', 3, 'barnch Manger ', 'Hajvery food ', 40000, '2019-02-04', '2022-11-12', 'Duty ', 'upload/inbound1498151717045192410.jpg', 'upload/inbound2300554086724846945.jpg', 'Hard working and confident ', '0000-00-00'),
(16, 'onsite', '', '', '', 'Usama', 'Yousaf ', '03461479447', 'usamachattha09@gmail.com', 'Gujranwala', 'Punjab', 'Islam', '', 'human-resource-manager', 45000, '', '', '', '', 'graduated', 'BBA(hons)', '2.53', 2021, 'University of Sargodha ', 3, 'barnch Manger ', 'Hajvery food ', 40000, '2019-02-04', '2022-11-12', 'Duty ', 'upload/inbound1498151717045192410.jpg', 'upload/inbound2300554086724846945.jpg', 'Hard working and confident ', '0000-00-00'),
(17, 'internship, onsite', '', '', '', 'Nadia', 'Rashid', '03217110098', 'rashidghafoor997@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'From friend', 'website-developer', 15000, 'HTML, css, Bootstrap', '', 'MySQL', '', 'graduated', 'BS Computer Science', '3.24', 2022, 'Virtual University of Sialkot', 0, '', '', 0, '', '', '', 'upload/Nadia Resume.docx', 'upload/123.png', 'My name is Nadia Rashid, and I\'m a recent computer science graduate from Virtual University', '0000-00-00'),
(18, 'onsite', '', '', '', 'Ali ', 'Raza', '03014164881', 'aliyaar00786@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Facebook', 'website-developer', 25000, 'HTML, css, Bootstrap, JavaScript, PHP', '', '', '', 'post_graduated', 'Have', '2.5', 2021, 'Virtual university of Pakistan', 1, 'Junior web develper', 'Mbin business corporation sialkot', 20000, '2022-03-01', '2022-07-31', 'Contract length completed', 'upload/inbound7855663761968462194.pdf', 'upload/inbound6384107200146926120.jpg', 'I am a positive, enthusiastic and competent Web Developer who, over the years, has built up a diverse range of skills, qualities and attributes that guarantee I will perform highly in this role.', '0000-00-00'),
(19, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '18:00', '22:00', 'Sajid ', 'Ghafoor', '03167273227', 'sajidazad1980@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Facebook', 'ui-ux-designer', 100000, 'Adobe XD, Figma, Photoshop, Illustrator', '', '', '', 'graduated', 'BA', '62%', 2002, 'Punjab Univeristy', 12, 'UI UX Designer', 'RepairDesk', 150000, '2018-06-02', '2021-03-16', '', 'upload/CV 2022.pdf', 'upload/img.jpg', 'Hi,\r\n\r\nIâ€™m Sajid, a UI UX designer from Pakistan, living in Lahore. Iâ€™ve worked across desktop and mobile (both web & mobile apps) and love to take an idea through design iterations it up for others to enjoy, elegantly solving some complex UI/UX probl', '0000-00-00'),
(20, 'internship', '', '', '', 'Khizar', 'Ahmed', '03068217407', 'khizarahmed667@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Social media', 'application-developer', 40000, 'JavaScript, React Native', '', 'Firebase, MySQL', 'HTML, css, Bootstrap, Python, Asp.net, Wordpress', 'graduated', 'Associate degree in software development ', '3.9', 2023, 'University of Sialkot ', 1, 'Biding on freelancer ', 'Karigar web solutions ', 25000, '2022-02-15', '2023-01-15', 'Still working itâ€™s part time remote base job i work from hone just 2 to 3 hours a day and 6 days a week time is flexible there', 'upload/Khizar Ahmed (1).pdf', 'upload/76649D7B-48CA-4A1A-99CD-32FD67087BC9.jpeg', 'Iâ€™m good in problem solving. Iâ€™m easily learn new things. Have interest in programming. I thing there nothing to describe about myself more than that. One more thing i design my resume in August thats why some dates and experience are changed as mentioned here', '0000-00-00'),
(21, 'onsite', '', '', '', 'Momna', 'Latif', '03110797175', 'momnalatif20@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'post in a group', 'social-media-marketer', 25000, 'Facebook marketing, Instagram marketing, TikTok marketing', '', '', '', 'graduated', 'bscs', '3.1', 2023, 'virtual university of pakistan', 0, '', '', 0, '', '', '', 'upload/momna resume final.docx', 'upload/dummy.jpg', 'My name is Momna Latif . I am a blogger/influencer. i am expert in digital and social marketing. I have three years experience in social media activities .', '0000-00-00'),
(22, 'onsite', '', '', '', 'Muhammad', 'Sajid', '03116456757', 'sajid03157@gmail.com', 'Mianwali', 'Punjab', 'Islam', 'Through LinkedIn', 'front-end-software-developer', 25000, 'HTML, css, JavaScript, React JS, Next JS', '', 'SQL, Mongo Db', 'Bootstrap, Node JS', 'graduated', 'Mcs ', '3.23', 2022, 'Virtual university', 0, '', '', 0, '', '', '', 'upload/Muhammad Sajid (1) (1)-1.pdf', 'upload/IMG-20220123-WA0034-removebg-preview.jpg', 'I am a fresh graduate from virtual university of Pakistan and I am looking for an opportunity to polish my skills in react js.', '04-Feb-2023'),
(23, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '08:00', '16:00', 'Ali', 'Raj', '03048959578', 'alirajmalik498@gmail.com', 'Lahore', 'Punjab', 'Islam', 'LinkedIn ', 'website-developer', 60000, 'HTML, css, Bootstrap, JavaScript, Python, Node JS, Wix, Wordpress', '', 'AWS, Firebase, MySQL, Mongo Db', 'Figma, Photoshop, Illustrator, Next JS', 'graduated', 'Bs in Electrical Engineering ', '2.91', 2018, 'Comsats University Islamabad Abbottabad Campus ', 2, 'Front End Developer ', 'Mindbridge pvt ltd', 50000, '2021-02-04', '2023-02-04', 'Still doing', 'upload/ali raj front end developer 2-1.pdf', 'upload/FB_IMG_1675394136577.jpg', '..', '04-Feb-2023'),
(25, 'internship', '', '', '', 'Aima ', 'Azam', '03144662688', 'aimaazam972@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Linkedin', 'ui-ux-designer', 30000, 'Adobe XD, Figma, Illustrator', '', '', 'Next JS', 'graduated', 'BShonour', '3.3', 2022, 'GCWUS', 0, '', '', 0, '', '', '', 'upload/Aima Azam resume.pdf', 'upload/WhatsApp Image 2023-01-11 at 7.46.37 PM.jpeg', 'I am too passionate to learn more skills in this field.My objective is to devote my skills to a progressive organization where I can fully utilize my knowledge, gain professional experience\r\nand learn new things.', '14-Feb-2023'),
(26, 'onsite', '', '', '', 'Mudassir', 'Hussain', '+923047322099', 'mudassirh498@gmail.com', 'Multan', 'Punjab', 'Islam', 'LinkedIn', 'ui-ux-designer', 120000, 'Adobe XD, Figma, Photoshop, Illustrator', '', '', '', 'graduated', 'IT', '3.2', 2018, 'ISP Multan ', 1, 'UI/UX Designer ', 'Softtik Technologies', 80000, '2022-05-01', '2023-02-28', '', 'upload/Mudassir Hussain.pdf', 'upload/232629091_2840207176289659_6042262784210751322_n.jpg', 'As a UI/UX designer, I\'m responsible for creating visually appealing, user-friendly interfaces that enhance the user experience. I have a strong grasp of user-centered design principles and am adept at understanding the needs and behaviors of users to create effective intuitive designs.\r\n\r\nI have a keen eye for aesthetics and pay close attention to the details of typography, color, layout, and composition. I am skilled in using design software and other tools to create wireframes, mockups, and prototypes that demonstrate the flow of user interactions.\r\n\r\nMy work is collaborative, and I work closely with product managers, developers, and other stakeholders to ensure that the designs I create align with the goals of the project and the needs of the user. I am comfortable presenting my work and receiving feedback, and I am able to iterate on designs quickly based on user feedback and testing.\r\n\r\nOverall, I am a creative problem solver who is dedicated to creating digital experiences that are both beautiful and functional.', '16-Feb-2023'),
(27, 'onsite', '', '', '', 'Syed Hamza Raza ', 'Jillani ', '03034564919', 'hamzaraza885@gmail.com', 'Daska', 'Punjab', 'Islam', 'Friend ', 'front-end-software-developer', 0, 'HTML, css, JavaScript, React JS', '', 'SQL', 'Bootstrap', 'graduated', 'Software Engineer ', '2.43', 2019, 'University of Gujarat (Sialkot campus)', 2, 'Software developer ', 'Webware, Softhelpers', 0, '', '', 'Not enough salary ', 'upload/SYED HAMZA JILLANI.pdf', 'upload/IMG20220904212900.jpg', 'I want to be a part of a competitive software community.', '16-Feb-2023'),
(28, 'onsite, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '12:00', '21:00', 'Bilal', 'Majeed', '03378613601', 'meetbilalmajeed@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'linkdinn', 'website-developer', 35000, 'HTML, css, Bootstrap, JavaScript, React JS, PHP, Wordpress', '', '', 'Photoshop, Illustrator', 'graduated', 'BSSE', '2.9', 2022, 'virtual university', 1, 'frrontEnd Developer', 'Ebeaconsofts', 30000, '2021-09-01', '2022-12-01', 'salery ', 'upload/Bilal Majeed edited_compressed.pdf', 'upload/IMG-20210821-WA0016.jpg', 'Onsite internship in Lahore Teknohus as a frontend developer ', '17-Feb-2023'),
(29, 'internship', '', '', '', 'Muhammad Afaaf', 'Tatla', '03104713269', 'affaftatla@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'From LinkedIn ', 'full-stack-software-developer', 30000, 'HTML, css, JavaScript, Flutter, Python, Dart', '', 'Heroku, Firebase, MySQL', '', 'graduated', 'BS Software Engineering ', '3.16', 2023, 'University of Lahore ', 0, '', '', 0, '', '', '', 'upload/Afaaf-Resume-M1.pdf', 'upload/Snapchat-1404646839.jpg', 'I\'m from Sialkot. Recently I completed my studies from University of Lahore . My final year project based on Machine Learning in Wich we create  web application and desktop application completely and use Flask framework . I also works in Flutter and makes an quiz competition app. Now I\'m looking for internship in python or flutter I\'m interested on both domains. ', '23-Feb-2023'),
(30, 'internship, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '09:00', '01:00', 'Rizwan', 'Shad', '03152042454', 'rizwanshad5@gmail.com', 'Karachi', 'Sindh', 'Islam', 'Facebook', 'application-developer', 60000, '', 'App Store, IOS Store', '', 'Adobe XD, Photoshop, Illustrator, Wordpress', 'graduated', 'Intermediate', 'B', 2010, 'KU', 2022, 'Quality', 'Pak Suzuki Motors', 60000, '2020-02-13', '2022-10-20', 'Starting a new Business', 'upload/inbound2109239102961712940.pdf', 'upload/inbound9112608142067596127.jpg', 'Learn & Earn', '24-Feb-2023'),
(31, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday', '', '', 'Saqlain', 'Ishtiaq', '03408092185', 'saqlainishtiaq@gmail.com', 'Rawalpindi', 'Punjab', 'Islam', 'I know you personally.', 'website-developer', 0, 'HTML, css, Bootstrap, JavaScript, React JS, Python, Node JS, Django', '', 'AWS, Heroku, Hostinger, Firebase, Go Daddy, SQL, MySQL, Mongo Db', 'Next JS', 'graduated', 'Electrical Engineering', '3.65', 2021, 'MIrpur University of Science and Technology', 0, '', '', 0, '', '', '', 'upload/CP CV.pdf', 'upload/Passport Size Image hq.png', 'A dynamic personality well versed in Database designing (MySQL, MongoDB), ORM, Web Backend (Node -> express, Python -> Django) and Frontend (React). ', '24-Feb-2023'),
(34, 'internship, remote', 'Saturday, Sunday', '08:00', '22:49', 'Muhammad', 'Hassan', '03439087794', 'hassanmrwt@gmail.com', 'Dera Ismail Khan', 'khyber_pakhtunkhwa', 'Islam', 'LinkedIn ', 'application-developer', 11000, 'Flutter', 'App Store', 'Firebase', 'HTML, css, Python, Wordpress', 'graduated', 'MCS', '3.75', 2021, 'Gomal University ', 2, 'Computer Operator ', 'HPK', 50000, '2021-04-21', '2022-05-24', '', 'upload/CV Hassan Flutter Developer.pdf', 'upload/IMG_20221104_180240-removebg-preview (1).png', 'Passionate for coding.', '25-Feb-2023'),
(35, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '09:00', '14:00', 'Maha', 'Kanwal', '03217634607', 'mk100401732@gmail.com', 'Sargodha', 'Punjab', 'Islam', 'Facebook Book Engr Sami wall', 'ui-ux-designer', 50000, 'Adobe XD, Figma, Photoshop, Illustrator', '', '', 'Wordpress', 'post_graduated', 'MA, M.ed', '65%', 2019, 'Sargodha University ', 4, 'IT Head', 'American Lycetuff School Sargodha ', 25000, '2019-02-15', '2022-02-25', 'To start full time Freelancing ', 'upload/inbound275479113454889212.pdf', 'upload/inbound7412897290430012692.jpg', 'doing UI UX Designing from 2020, worked with clients around the globe. \r\nI\'ll do my work with honesty and always keep UX while designing. ', '25-Feb-2023'),
(36, 'remote', 'Wednesday, Thursday, Friday, Saturday, Sunday', '19:30', '01:00', 'Haleema', 'Qasim', '03014358102', 'haleemamughal15@gmail.com', 'Lahore', 'Punjab', 'Islam', 'Linkdin', 'website-developer', 100000, 'HTML, css, Bootstrap, JavaScript, React JS', '', '', 'Next JS', 'graduated', 'Bsit', '3.2', 2021, 'University of education', 2, 'React js developer', 'Sprintx', 90000, '2020-12-01', '2023-02-27', 'No more projects available yet', 'upload/Haleema Qasim new-1.pdf', 'upload/Snapchat-577044981.jpg', 'I am react js developer having 2 years+ experience ', '27-Feb-2023'),
(37, 'onsite, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '09:00', '18:00', 'Faiz', 'Hassan', '03042152384', 'faizhassan550@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Linkdln ', 'application-developer', 160000, 'Swift', 'App Store, IOS Store', 'Firebase, SQL, MySQL', 'Figma, Photoshop, HTML, css, Bootstrap, PHP', 'graduated', 'BSCS', '3.17', 2018, 'Lahore Garrison university ', 3, 'Software engineer iOS ', 'Techsole ', 80000, '2018-09-27', '2022-07-27', '', 'upload/New_Resume_Faiz_Hassan.pdf', 'upload/9542D239-ACD9-4D6C-AEC1-D4D2DB70F899.jpeg', 'I have 4 years experience and i have upload more than 8 apps in app store', '27-Feb-2023'),
(38, 'onsite', '', '', '', 'Muhammad', 'Arslan', '+92 309 7980655', 'arslandev.py@gmail.com', 'Lahore', 'Punjab', 'Islam', '', 'full-stack-software-developer', 150000, 'HTML, css, Python, Django', '', 'Firebase, Go Daddy, MySQL, Postgress, Mongo Db', 'Adobe XD, Bootstrap', 'graduated', 'Bachelor of Science in Computer Science', '3.05', 2022, 'Minhaj Univeristy of Lahore', 2, 'Django Developer', 'Techflipp', 130000, '2021-03-01', '', 'this job is remote and not another activity.', 'upload/10:11:2022.pdf', 'upload/ar.jpeg', 'A Software Developer with 2+ years of experience and expertise in various roles. Passionate about technology and likes to adapt to any working environment, learns and delivers within timelines, and also can work with organisation\'s, both on-site or remotely.', '27-Feb-2023'),
(39, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday, Saturday', '11:29', '17:29', 'Muhammad', 'Umer', '03314405397', 'umermughal614@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'facebook', 'content-writer', 40000, '', '', '', '', 'post_graduated', 'M.Phil Electrical Engineering', '3.82', 2022, 'University of Gujrat', 3, 'Research Assistant', 'University of Gujrat', 45000, '2019-07-22', '2022-10-10', 'Contract ended', 'upload/Muhammad Umer (CV)..pdf', 'upload/My pic with white background.jpg', 'I am an electrical engineer but also a professional content writer with over three years of experience in the field.\r\n\r\nAs a content writer, I have a keen eye for detail and a talent for crafting clear and compelling written communication. I have experience writing a variety of content, such as blog posts, articles, social media posts, marketing materials, and more.\r\n\r\nFurthermore, my experience as a research assistant in a university suggests that i have a strong foundation in research methodology and the ability to analyze and interpret complex data. This skillset may come in handy when conducting research for your content writing projects.\r\n\r\nOverall,  unique skills as an electrical engineer and content writer make me a valuable asset in various industries, from technology to marketing to education. ', '28-Feb-2023'),
(40, 'onsite', '', '', '', 'Sumeet Ahmed', 'Hashmi', '03041444454', 'sumeethashmi@gmail.com', 'Lahore', 'Punjab', 'Islam', 'Linkedin', 'website-developer', 60000, 'HTML, css, Bootstrap, JavaScript, React JS', '', 'SQL', 'Figma', 'graduated', 'BSSE', '3.23', 2021, 'University of Gujrat', 1, 'Front End Developer', 'Global Software Consulting', 50000, '2022-07-08', '2023-01-03', 'Because of environment', 'upload/Sumeet Front End Dev.pdf', 'upload/DSC_6046.jpg', 'Front end develop with 1 year of experience in React Js', '01-Mar-2023'),
(41, 'onsite', '', '', '', 'Umair', 'Shafaqat', '03370792324', 'umairshafaqat003@gmail.com', 'Daska', 'Punjab', 'Islam', 'LinkedIn ', 'ui-ux-designer', 80000, 'Figma, Photoshop, Illustrator', '', '', '', 'graduated', 'BS-IT', '3.0', 2020, 'University of Gujrat (Murray college campus) ', 2, 'Designer ', 'Trademor', 45000, '2023-01-01', '', 'Finding Better opportunity ', 'upload/Umair Resume.pdf', 'upload/IMG_20200123_230522.jpg', 'Web ui/ux designer. Having 2 plus years of experience. Currently working in trademor as a designer. I like drinking coffee and chaye. Also a big dreamer ;) ', '01-Mar-2023'),
(42, 'onsite', '', '', '', 'Umer', 'Ali', '03121777152', 'muhammadumeralishah@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'LinkedIn', 'full-stack-software-developer', 60000, 'HTML, css, JavaScript, React JS, Node JS', '', 'MySQL, Mongo Db', 'Bootstrap, Wordpress', 'post_graduated', 'Bs(cs)', '2.5', 2022, 'USKT', 1, 'Mern Stack Developer', 'Iyrix Tech', 45000, '2022-07-18', '2023-03-02', 'Looking for new opportunities and also switching for higer salary ', 'upload/M Umer Ali Shah.pdf', 'upload/Snapchat-891243104.jpg', 'I\'m a MERN stack developer with 2 years of experience in Mern stack and have 3 years of experience in simple web development like HTML, CSS & JS.\r\n\r\nI hope with my addition in your team i learn some new trends.', '02-Mar-2023'),
(43, 'onsite', 'Monday, Tuesday', '', '', 'Saliheen', 'Afridi', '03379691775', 'saliheenafridi0@gmail.com', 'Peshawar', 'khyber_pakhtunkhwa', 'Islam', 'Linkedin', 'application-developer', 180000, 'JavaScript, React Native, Flutter, Dart', '', 'Firebase, SQL, MySQL', 'HTML, css, Next JS, Node JS', 'graduated', 'BSc Electrical Engineering', '3.3', 2020, 'University of science and technology bannu', 3, 'Lead software developer', 'WQ Softwares', 110000, '2021-06-01', '2023-04-01', 'Late sallary,No oppurtunities for growth, non professional environment', 'upload/saliheen-cv.pdf', 'upload/saliheen-cv-1.png', 'I am react native ,react and nodejs developer', '05-Mar-2023'),
(44, 'onsite, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '10:30', '17:30', 'Ibtisam', 'Khalid', '03264003121', 'ibtsam.deu@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Linkedin', 'website-developer', 80000, 'HTML, css, Bootstrap, JavaScript, React JS, Wordpress', '', 'Hostinger', 'Next JS', 'graduated', 'Software Engineering', '3.0', 2022, 'Superior University ', 1, 'ReactJs Developer', 'CBSol', 50000, '2022-03-05', '2023-09-05', 'Cant manage office and university timing', 'upload/ikd resume.pdf', 'upload/75DF18DA-0631-47E6-8224-6804674D695F.jpeg', 'Iâ€™m a frontend web developer and have more than 1 year of experience in ReactJs development. I also worked on different tools and technologies like: NextJs,Redux,Firebase,Bootstrap,MaterialUI,Antdesign,JavaScript and many more. ', '05-Mar-2023'),
(45, '', '', '', '', 'Bilal', 'Javed', '03004501166', 'malikbilaljavaid@gmail.com', 'Lahore', 'Punjab', 'Islam', '', 'website-developer', 80000, 'HTML, css, Bootstrap, JavaScript, Python, Django', '', 'SQL, MySQL, Postgress', '', 'graduated', 'Master of Computer Science ', '3.05', 2022, 'University of Management and Technology ', 1, 'Associate Software Engineer ', 'Vastmesh LLC', 45000, '2022-08-01', '', '', 'upload/Bilal Javed.pdf', 'upload/C698C627-03D8-4B3F-AB2C-B663EFD2E86E.jpeg', 'A computer sciences enthusiast, love to learn more.', '07-Mar-2023'),
(46, '', '', '', '', 'Syed Shabi', 'Gardezi', '+923044648541', 'shabigardezi51214@gmail.com', 'Lahore', 'Punjab', 'Islam', 'Linkedin ', 'website-developer', 0, 'HTML, css, JavaScript, Python, Django', '', 'SQL, MySQL, Postgress', '', 'graduated', 'Computer science ', '3.12', 2022, 'UCP Lahore', 6, 'Python Django Developer', 'CodeGraphers', 60000, '2022-08-01', '2023-02-01', '', 'upload/Shabiâ€™s Resume.pdf', 'upload/7D2B2EA7-C396-4A87-ABFB-8B8F548BD5FD.jpeg', 'iâ€™m python guy.', '07-Mar-2023'),
(47, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '12:00', '20:00', 'Umar', 'Hayyat', '03076047341', 'umar187hayyat@gmail.com', 'Lahore', 'Punjab', 'Islam', 'Linkedin ', 'back-end-software-developer', 300000, 'Python, Django', '', 'SQL, MySQL, Postgress', '', 'graduated', 'Software Engineering', '2.56', 2019, 'National Textile University, Faisalabad', 4, 'Senior Software Engineer', 'Tower Technologies Pvt. Ltd.', 250000, '2020-10-07', '2023-03-07', 'No specific reason.', 'upload/UMAR HAYYAT RESUME.pdf', 'upload/pp.jpg', 'As an enthusiastic and competent individual with a progressive attitude, I carry a \'can do\' mentality that is evident through my self-motivation and ability to inspire team members at all levels. Working as a Python-Django developer, I have expertise in using a range of technologies such as Docker, Bit Bucket, and Azure Git for version control. In addition, I have a solid understanding of Internet of Things (IoT) technologies, including Azure IoT Hub and RabbitMQ messaging protocol, as well as experience in working with hardware platforms such as Arduino and Raspberry Pi.\r\n\r\nI am well-versed in utilizing various tools and platforms, including Redis and Celery for task queue and message broker solutions, as well as serverless functions using Azure App Service. I have extensive experience in CI/CD, which has allowed me to effectively automate the build and deployment process of software applications. I also have a strong understanding of database management systems such as PostgreSQL, and I am proficient in managing Linux servers. Overall, my technical expertise and collaborative approach enable me to deliver high-quality software solutions that meet the needs of clients and end-users.', '07-Mar-2023'),
(48, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '10:00', '19:00', 'Syed Murtaza ', 'Qamar', '+923174057678', 'murtaza.qamarsyed@gmail.com', 'Gujrat', 'Punjab', 'Islam', 'Linkedin', 'project-manager', 200000, 'Understanding of Software development, Team management, good english communication, Defining Scope of project, Documentation', '', '', 'HTML, JavaScript, React JS, PHP, Node JS, AWS, Go Daddy, MySQL, Mongo Db', 'graduated', 'BS CS', '2.98', 2016, 'University of Gujrat', 5, 'Full stack Developer', 'ISMMART', 250000, '2022-07-14', '2023-03-15', 'mismanagement and Rude Behaviour', 'upload/Resume-Syed-Murtaza-Qamar.pdf', 'upload/EKS.png', 'A simple and straightforward person', '10-Mar-2023'),
(49, 'onsite', '', '', '', 'Muhammad ', 'Aamir Zaman ', '03267896969', 'immuhammadaamirzaman@gmail.com', 'Rawalpindi', 'Islamabad', 'Islam', 'Linkedin', 'back-end-software-developer', 120000, 'Python, Django', '', 'MySQL, Postgress, Mongo Db', 'HTML, css, JavaScript', 'graduated', 'Computer Engineering ', '3.39', 2021, 'Dr. A.Q. Khan Institute of Computer Science and Information Technology ', 1, 'Software Engineer ', 'CodeFulcrum ', 80000, '2021-12-21', '2023-02-17', 'I want to work in a peaceful environment.', 'upload/Muhammad Aamir Zaman CV.pdf', 'upload/F22E1AE8-4CB9-4BFF-80CD-3D545ACDC059.jpeg', 'I am self motivated person who wants to learn and grow in a healthy and peaceful environment. I want to learn new skills and use this skill and knowledge to help and grow with organisation.', '10-Mar-2023'),
(50, 'remote', 'Tuesday, Wednesday, Friday, Saturday, Sunday', '08:00', '16:00', 'Ahsan', 'Umair', '923342548823', 'writetoahsanumair@gmail.com', 'Rahim Yar Khan', 'Punjab', 'Islam', 'From LinkedIn', 'full-stack-software-developer', 800000, 'HTML, css, JavaScript, React JS, Python, Node JS, Django', '', 'AWS, Heroku, Firebase, MySQL, Postgress', 'Bootstrap', 'graduated', 'Masters in Computer Science', '3.15', 2021, 'Khwaja Fareed University of Engineering & Information Technology', 4, 'Full Stack Developer', 'Dynalytix', 400000, '2022-01-01', '', 'Not leaving yet. I need another job as well. I need to work hard because my wishlist is full.', 'upload/Ahsan Umair (Latest CV) .docx (1).pdf', 'upload/325659292_1452402065286044_539812774991209995_n.jpg', 'I am a full stack web developer proficient in fundamental front-end languages and server-side languages. In-depth knowledge of Python, Javascript, and cloud platforms. Analytical and precise professional with 5 years of hands-on experience taking charge of front-end and back-end web development. Skillful creating servers and databases for functionality and designing and developing APIs. Hardworking collborator with track record of superior results. Collaborative team player with excellent abilities.', '11-Mar-2023'),
(51, 'onsite', '', '', '', 'Umer', 'Farooq', '03090969377', 'uf786277@gmail.com', 'Burewala', 'Punjab', 'Islam', 'From a Friend ', 'website-developer', 80000, 'HTML, css, Bootstrap, JavaScript, Python, Django', '', 'SQL, MySQL, Postgress', 'Dart, Kotlin', 'graduated', 'BSIT ', '3.37', 2023, 'University of Sahiwal Sahiwal ', 1, 'Full stack developer ', 'AGRSOFT ', 40000, '2023-03-11', '2023-03-11', 'Want to change the City ', 'upload/UMER NEW CV.pdf', 'upload/IMG-20230111-WA0028.jpg', 'I am a hardworking and passionate learner of new technologies and to handle the new challenges efficiently.', '11-Mar-2023'),
(52, 'onsite, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '09:00', '06:00', 'Qasim', 'Ali', '03094380846', 'qasi8555@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Linkedin', 'full-stack-software-developer', 70000, 'HTML, css, JavaScript, React JS, Next JS, Node JS', '', 'Heroku, Hostinger, Firebase, Go Daddy, SQL, MySQL, Postgress, Mongo Db', 'Figma, Bootstrap, Wordpress', 'graduated', 'Fsc', '55%', 2017, 'Siit college', 2, 'Frontend Engineer', 'WPBrigade', 60000, '2021-07-09', '2023-03-04', '', 'upload/Qasim-CV.pdf', 'upload/IMG_20230312_015423.jpg', 'Well, I\'ve been working as a frontend developer for four years and Mern stack developer for 2 years.', '12-Mar-2023'),
(53, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '11:00', '19:00', 'Usman', 'Arshad', '03027629877', 'usmanaryk1@gmail.com', 'Rahim Yar Khan', 'Punjab', 'Islam', '', 'front-end-software-developer', 130000, 'HTML, css, JavaScript, Angular JS', '', 'Firebase', 'Figma, Photoshop, Bootstrap, Python', 'post_graduated', 'MS Electrical Engineering ', '3.5', 2018, 'Superior university Lahore ', 4, 'Front end developer angular', 'Codinghubpro.pk', 115000, '2018-09-01', '2022-08-01', 'Company move ', 'upload/Angular developer usman cv.pdf', 'upload/New_Pic_large__1520261017_46252.jpg', 'Frontend angular developer ', '12-Mar-2023'),
(54, 'remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '12:00', '20:00', 'Laeeqa', 'Gaffar', '03367326-148', 'laeeqa.962@gnail.com', 'Lahore', 'Punjab', 'Islam', 'Linkedin ', 'ui-ux-designer', 250000, 'Figma', '', '', '', 'graduated', 'BS Software Engineer', '2.7', 2021, 'Comsats University', 3, 'User experience designer', 'Einc(US based startup)', 200000, '2022-08-01', '', '', 'upload/Resume-Laeeqa-Gaffar (2) 2.pdf', 'upload/67E9D37F-2E9C-4ED7-B62F-03AC158CB9A2.JPG', 'I am passionate about my career ', '12-Mar-2023'),
(55, 'onsite, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '09:00', '18:00', 'M Haseeb ', 'Mehmood ', '03338636163', 'haseeb.uog22@gmail.com', 'Daska', 'Punjab', 'Islam', 'LinkedIn ', 'website-developer', 60000, 'HTML, css, Bootstrap, JavaScript, Wordpress', '', 'MySQL', 'Photoshop', 'graduated', 'BS Computer Science ', '2.3', 2017, 'University of Gujrat', 1, 'Web Developer ', 'Computer Xperts ', 50000, '2022-02-21', '', '', 'upload/M-Haseeb_Front-end-developer-2.pdf', 'upload/9657.JPG', 'I\'m Front End and WordPress developer having 3+ years experience.', '12-Mar-2023'),
(56, 'onsite', '', '', '', 'Fakhar', 'hafeez', '03129232373', 'fakharhafeez98@gmail.com', 'Islamabad', 'Islamabad', 'Islam', 'LinkedIn', 'website-developer', 30000, 'HTML, css, Bootstrap, JavaScript, React JS, Node JS, Wordpress', '', 'Firebase, MySQL, Mongo Db', 'Photoshop, Illustrator', 'graduated', 'Software engineering', '3.15', 2022, 'Mirpur university if science and technology ', 1, 'Internee as Mern stack developer', 'Qc360', 30000, '2022-12-12', '2023-02-12', 'Its a 2 month internship offered by pasha ', 'upload/Fakhar  cv (2).pdf', 'upload/1671534288276.png', 'My self fakhar hafeez and I have done my bacholars as software engineering after that I enrolled in mern stack bootcamp under pasha ..after 2 months internship now I am looking for the mern stack job in order to continue my skills and professional field ...I hope that I will learn a lot working under you people ...thank you in anticipation ', '15-Mar-2023'),
(57, 'remote', 'Monday, Tuesday, Wednesday, Thursday', '09:00', '17:00', 'Muhammad Hassan', 'Waseem', '03348616118', 'hsnwsm911@hotmail.com', 'Sialkot', 'Punjab', 'Islam', 'LinkedIn', 'application-developer', 80000, 'Flutter', 'App Store, IOS Store', 'Firebase, SQL, MySQL', 'Python, Asp.net', 'graduated', 'BSSE', '2.79', 2022, 'Comsats University Islamabad', 1, 'Flutter Developer', 'Systems Limited', 45000, '2022-04-19', '2023-03-02', 'Low salary and not offering remote job', 'upload/CV.pdf', 'upload/P.jpeg', 'I am a mobile app developer with 2 years of experience in Flutter. During this time, I have developed and deployed several successful applications on both iOS and Android platforms. My expertise includes UI design, app architecture, and developing clean, efficient, and maintainable code.\r\n\r\nI have a strong passion for mobile development and constantly stay up-to-date with the latest trends and technologies in the industry. I enjoy collaborating with clients and team members to deliver high-quality applications that meet their needs.\r\n\r\nWith my technical skills, creativity, and attention to detail, I am confident that I can contribute to any project and deliver exceptional results. I am a quick learner, open to feedback, and always strive to improve my skills. Looking for new and exciting opportunities to further develop my skills in mobile app development.', '29-Mar-2023'),
(58, 'onsite', '', '', '', 'Sohaib ', 'Hassan', '03404892471', 'sohaibhassan0000@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Internet', 'front-end-software-developer', 60000, 'HTML, css, JavaScript, React JS, Next JS', '', 'Mongo Db', 'Figma, Bootstrap, Python, Node JS', 'graduated', 'Software Engineering ', '2.5', 2023, 'Comsats University Lahore ', 2022, 'Freelance', 'Fiverr', 10000, '2022-07-06', '2023-02-16', 'No', 'upload/sohaib_hassan.pdf', 'upload/JPEG image 86.jpeg', 'Hi,\r\nI am constantly seeking opportunities to expand my knowledge and skillset.I am passionate about my Field and am dedicated to making meaningful contributions to my work. I believe in continuous learning and growth, and I am eager to bring my expertise and enthusiasm to a new challenge.Thank you for considering my application. I look forward to the opportunity to discuss how I can contribute to your team.', '31-Mar-2023'),
(59, 'onsite', '', '', '', 'Hassan', 'Ali', '03456760792', 'hassanmunir363@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'From Internet', 'website-developer', 50000, 'HTML, css, Bootstrap, JavaScript, React JS, Node JS', '', 'AWS, Mongo Db', 'Figma, Next JS', 'graduated', 'BS (Information Technology)', '3.23', 2022, 'University of Gujjrat', 0, 'web app devloper', 'multinational company', 40000, '2023-02-13', '2023-03-31', 'For better opportunity', 'upload/hassanali.pdf', 'upload/cvc.png', 'Hi, I am Hassan Ali. I passed my bachelor\'s degree in (Information Technology) from Gujrat University. I also passed Cloud Native Computing diploma (duration 2 years) from PIAIC. I am a Full Stack React JS Developer with 1+ year Experience in developing web application and websites. I have expertise in HTML, CSS, JavaScript, TypeScript, Rest APIs ,Node JS and MongoDB. I have a passion in creating user-friendly websites that are optimized for performance. I also have expertise in integrating Rest APIs with frontend. My goal is to create high-quality products that meet the needs of users.', '31-Mar-2023'),
(60, 'internship, remote', 'Monday, Tuesday, Wednesday, Thursday, Friday', '19:00', '23:24', 'Alia ', 'Parveen ', '03218018340', 'pariialia203@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'LinkedIn ', 'website-developer', 10000, 'HTML, css, Bootstrap, JavaScript, React JS, PHP, Wordpress', '', 'Firebase, SQL, MySQL, Mongo Db', 'Adobe XD, Figma, Photoshop, Illustrator', 'graduated', 'Bs computer science ', '3.1', 2023, 'Gc women university sialkot ', 1, 'Full stack developer ', 'Hollow core and devnation ', 10000, '2022-01-01', '2023-02-24', 'Contact based', 'upload/Alia cv.pdf', 'upload/IMG-20221024-WA0116.jpg', 'Hi I am Alia Parveen. I have experience in Mern stack from Devnation and full stack developer in Hollowcore company. I want to do Remote job have you any position for Mern stack or full stack developer.\r\nHere is my portfolio link:\r\nhttps://alia-parveen.netlify.app/', '09-Apr-2023'),
(61, 'internship', '', '', '', 'Muhammad', 'Nauman', '03426827224', 'naumanbutt2002@gmail.com', 'Sialkot', 'Punjab', 'Islam', 'Linkedin', 'full-stack-software-developer', 0, 'HTML, css, Angular JS, Python', '', 'SQL, MySQL', 'Photoshop, Bootstrap', 'graduated', 'BS Computer Science', '3.46', 2024, 'University of Gujrat ', 0, '', '', 0, '', '', '', 'upload/MuhammadNauman_CV.pdf', 'upload/1680604904027 copy.JPG', 'Third-year Computer Science student being \r\ncomputer scientist. My passion for computer \r\nscience and learning new technologies\r\nbrought me to higher level platforms where I \r\ncan learn computer science skills and \r\nscience. Last couple of years I had learned \r\na lot about programming fundamentals, \r\nOOP , DSA , DBMS, OS, AI C#.net etc \r\nalong with basic android app development, \r\nLinux and Python development.\r\nI have some projects such as B2B Manager, \r\nPoint of Sale (Desktop App) and many Web \r\nDesigns on my GitHub\r\nprofile (github.com/naumanbutt2002).', '10-Apr-2023');

-- --------------------------------------------------------

--
-- Table structure for table `home_hero`
--

CREATE TABLE `home_hero` (
  `id` int(11) NOT NULL,
  `home_hero_title` varchar(255) NOT NULL,
  `home_hero_des` longtext NOT NULL,
  `home_hero_des2` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_hero`
--

INSERT INTO `home_hero` (`id`, `home_hero_title`, `home_hero_des`, `home_hero_des2`) VALUES
(1, 'Software Development Company', 'Welcome to our software development company, FABTECHSOL. We specialize in providing custom software development, UI/UX designing, application development and website development services. As a software house, we have 6 years of experience in offering software services to businesses of all sizes, from startups to established enterprises. We pride ourselves on being a reliable and trusted software development company that delivers high-quality solutions tailored to our clients\' specific needs. At our software development company, we understand that every business has unique requirements, and that\'s why we offer custom software development services. Our team of expert developers uses cutting-edge technology to design and develop software solutions that are tailored to your business needs. We work closely with our clients to ensure that our software services are aligned with their business goals and objectives.', 'Want To Get Your Product Ready?');

-- --------------------------------------------------------

--
-- Table structure for table `home_meta`
--

CREATE TABLE `home_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_meta`
--

INSERT INTO `home_meta` (`id`, `meta_des`) VALUES
(1, 'Looking for a software development company? Our team of experts can help you with custom software development, app development, web development.');

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keywords` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `keywords`) VALUES
(1, 'fabtechsol, Fabulous Technology Solutions, it software company, software house in sialkot, web development in sialkot, Software house, Software Development Company,Web Application Development Company,Web Application,Web Application development,Software Development,Website Development,Best web application Developers,Mobile Application Developers,IT company');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `date`, `time`) VALUES
(18, 'Hiring Python Django Developers with 3 years experience', '2022-12-01', '01:00'),
(20, 'Hiring Project Manager with 3 years experience', '2023-02-01', '01:00'),
(21, 'Hiring Python React Js with 3 years experience', '2023-02-28', '01:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_approach`
--

CREATE TABLE `our_approach` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_approach`
--

INSERT INTO `our_approach` (`id`, `heading`, `des`) VALUES
(1, 'Our approach', 'With hundreds of projects completed, weâ€™ve developed an excellent sense for pattern recognition and can help you avoid early mistakes in going from vision to reality. To help you succeed, we allocate a dedicated team of the best talent that effectively handles your workload and makes sure that we ship clean, well-documented code, on schedule');

-- --------------------------------------------------------

--
-- Table structure for table `our_core_values`
--

CREATE TABLE `our_core_values` (
  `id` int(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_core_values`
--

INSERT INTO `our_core_values` (`id`, `heading`, `des`) VALUES
(1, 'Our Core Values', 'Our values are at the heart of what we do and how we do it.');

-- --------------------------------------------------------

--
-- Table structure for table `our_mission`
--

CREATE TABLE `our_mission` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_mission`
--

INSERT INTO `our_mission` (`id`, `heading`, `des`) VALUES
(1, 'Our Mission', 'To pave the way for the advancement of technological progress in the 21st century.');

-- --------------------------------------------------------

--
-- Table structure for table `our_vision`
--

CREATE TABLE `our_vision` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_vision`
--

INSERT INTO `our_vision` (`id`, `heading`, `des`) VALUES
(1, 'Our Vision', 'Our vision is to bring FABTECHSOL in the list of top 10 IT companies.');

-- --------------------------------------------------------

--
-- Table structure for table `perk`
--

CREATE TABLE `perk` (
  `id` int(11) NOT NULL,
  `perk_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perk`
--

INSERT INTO `perk` (`id`, `perk_name`) VALUES
(3, 'Dedicated project team'),
(2, 'Free requirement analysis session'),
(4, 'Regular updates and meetings'),
(5, 'On time project completion'),
(6, 'Life time free support');

-- --------------------------------------------------------

--
-- Table structure for table `previous_record`
--

CREATE TABLE `previous_record` (
  `id` int(11) NOT NULL,
  `t_staff` int(11) NOT NULL,
  `t_projects` int(11) NOT NULL,
  `r_clients` int(11) NOT NULL,
  `t_feedbacks` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_record`
--

INSERT INTO `previous_record` (`id`, `t_staff`, `t_projects`, `r_clients`, `t_feedbacks`) VALUES
(1, 28, 105, 25, 84);

-- --------------------------------------------------------

--
-- Table structure for table `project_hero`
--

CREATE TABLE `project_hero` (
  `id` int(11) NOT NULL,
  `project_hero_title` varchar(255) NOT NULL,
  `project_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_hero`
--

INSERT INTO `project_hero` (`id`, `project_hero_title`, `project_hero_des`) VALUES
(1, 'Our Projects', 'At Fabtechsol, we concentrate on building custom software solutions for a wide range of industries. With over 5 years of experience in the field, our team has the knowledge and expertise to tackle any project, big or small. Whether you need a new website or a complex enterprise application, we have the skills and resources to get the job done right.');

-- --------------------------------------------------------

--
-- Table structure for table `project_meta`
--

CREATE TABLE `project_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_meta`
--

INSERT INTO `project_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions Solve The Complex Challenges That Always Arise In The Digital Evolution, And Organize Continuous Innovation.');

-- --------------------------------------------------------

--
-- Table structure for table `project_portfolio`
--

CREATE TABLE `project_portfolio` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `list_item` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `p_catg` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_3` varchar(255) NOT NULL,
  `img_4` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_portfolio`
--

INSERT INTO `project_portfolio` (`id`, `heading`, `sub_heading`, `des`, `list_item`, `icon`, `p_catg`, `img_1`, `img_2`, `img_3`, `img_4`) VALUES
(98, 'Ablauf Software', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/ablauf.png', 'Software Development', '../upload/home â€“ 21-ablauf.png', '../upload/home â€“ 16-ablauf.png', '../upload/home â€“ 7-ablauf.png', '../upload/home â€“ ablaufs.png'),
(96, 'HR Software', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/HR-home-f.png', 'Software Development', '../upload/HR Dashboard â€“ 1.png', '../upload/HR Statistics Dashboard â€“ 1.png', '../upload/HR Dashboard â€“ 14.png', '../upload/HR Dashboard.png'),
(97, 'Health Trust', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/health-trust-main.png', 'Software Development', '../upload/add new candidate.png', '../upload/add new match â€“ 27.png', '../upload/dashbord â€“ 2.png', '../upload/add new match â€“ 6.png'),
(87, 'Admin', 'Admin Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/admin-main.png', 'Software Development', '../upload/Dashboard.png', '../upload/add new agents â€“ 1.png', '../upload/Dashboard â€“ 13.png', '../upload/design request â€“ 9.png'),
(76, 'CargoMovers', 'Responsive Transport Management System', 'People send their stuff from one place to another using different cargo companies all over the world. As we are living in modern age so we donâ€™t want our users to get worried about sending their stuff from one place to another. Generic users and vehicle owners can come to our website. Vehicle owners can register their vehicles. When a generic user want to send his stuff using cargo. He simply will login and give details of his stuff. Our automatic system will show him multiple vehicle owners. User can choose one of them and decide the prices. An order will be locked. Our notification system will notify the generic user and the vehicle owner. Our admin can track everything that happens in the system.  ', 'Html, Css, Javascript, React js, Python, Django, hosted on aws', '../upload/cargo-mockup.png', 'Website Development', '../upload/Sign Up.png', '../upload/home â€“ 2.png', '../upload/home â€“ 3.png', '../upload/home â€“ 4.png'),
(88, 'Lease Property', 'Property Management Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/lease-main.png', 'Software Development', '../upload/lease-home.png', '../upload/lease-4.png', '../upload/lease-7.png', '../upload/lease-home â€“ 6.png'),
(89, 'Acquision Fit', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/acqu-home.png', 'Software Development', '../upload/Account-aq.png', '../upload/edit-aq.png', '../upload/messages-aq.png', '../upload/Notification-aq.png'),
(90, 'popl', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/popl-mockup.png', 'UI/UX Design', '../upload/dashboard-task history â€“ 25.png', '../upload/dashboard-task history â€“ 26.png', '../upload/dashboard-task history â€“ 27.png', '../upload/dashboard-task history â€“ 33.png'),
(91, 'J. Design', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/J.mockup.png', 'UI/UX Design', '../upload/j. p9.jpeg', '../upload/Home Page â€“ 7 (1).png', '../upload/Home Page â€“ 4 (1).png', '../upload/Home Page â€“ 12 (1).png'),
(92, 'Greeting cards design', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/greeting card-main.png', 'UI/UX Design', '../upload/card-home-9.png', '../upload/card-home-1.png', '../upload/card-home-4.png', '../upload/card-home-5.png'),
(130, 'Blood bank App', 'App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/blood-bank-app.png', 'Application Development', '../upload/bld-bnk-2.png', '../upload/bld-bnk-1.png', '../upload/bld-bnk-3.png', '../upload/bld-bnk-4.png'),
(93, 'subscribe store design', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/subscribe-store-mockup.png', 'UI/UX Design', '../upload/create.png', '../upload/home-ui.png', '../upload/subscription.png', '../upload/add subscription.png'),
(86, 'Questionnaire', 'Questionnaire Compliance Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/questionare-1.png', 'Software Development', '../upload/que-1.PNG', '../upload/que-3.PNG', '../upload/que-5.PNG', '../upload/que-6.PNG'),
(85, 'busibee', 'Responsive Website ', 'Busibee is a platform which provide services to business and student and facilitate them. \r\nBusiness create tasks and set budget for tasks. Student send responses to business for complete their tasks. \r\nBusiness can see which students responses their tasks and hire for their tasks.\r\nStudent and Business can chat with each other.', 'Html, Css, Javascript, React js, php laravel, Mysql. hosted on hiroku', '../upload/bzy bee.png', 'Website Development', '../upload/bzy-bee-e.png', '../upload/bzy-bee-2.PNG', '../upload/bzy-bee-9.PNG', '../upload/bzy-bee-p2.PNG'),
(79, 'Home Now', 'Responsive Website ', 'A real estate Management platform, in which user Request for specific location of real estate with price and price per square feet. If the terms of user and owner match then the application of the request forward then the further deal is made on that property. We get all necessary information of the users to lock the deal. We can reject or accept the deal based on information provided by the user. We match his provided information with his information available in government documents. ', 'html, css, javascript, react js, python, django, hosted on aws', '../upload/home-now-mockup.png', 'Website Development', '../upload/HN-edit.png', '../upload/HN-edit or view request.png', '../upload/HN-questions.png', '../upload/HN-view.png'),
(80, 'Storeks Verification', 'Responsive Website ', 'Storeks verifications Web application is a platform used to verify your internationals Identities by using ID cards and driving later. If an organization want to check its users are Authentic and want to verify their identities they take services from Storeks to verify user documents.', 'Html, Css, Javascript, React js, Python, Django, hosted on aws', '../upload/storeks-mockup.png', 'Website Development', '../upload/home-tinified.png', '../upload/feature-tinified.png', '../upload/feature-tinified3.png', '../upload/feature â€“ tinified2.png'),
(81, 'City Pass', 'Responsive Website ', 'In city pass we create city passes of a specific city (Birmingham city). This pass is created by our admin. Our admin sets the  passes for the city cites with different prices. Users can come to our website and buy these passes. We give the users a barcode. Which can be scanned on the cites that are included in the pass. Scanning the barcode will remove that specific cite from the pass. \r\nOur notification system notifies the users about their pass and cites.', 'Html, Css, Javascript, React js, php laravel, Mysql. hosted on hiroku', '../upload/city-pass-mockup.png', 'Website Development', '../upload/home_11zon - -city-pass.png', '../upload/about us-city-pass.png', '../upload/customer-city-pass.png', '../upload/Payments--city-pass.png'),
(82, 'Agents', 'Mobile App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/agent-app-new.png', 'Application Development', '../upload/agent-app-1.png', '../upload/agent-app-2.png', '../upload/agent-app-3.png', '../upload/agent-app-4.png'),
(83, 'Doctor App', 'Mobile App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/dr-app-new.png', 'Application Development', '../upload/app-drr-1.png', '../upload/app-drr-2.png', '../upload/app-drr-3.png', '../upload/app-drr-4.png'),
(84, 'Travel Ticket', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/travel-tick-mockup.png', 'Software Development', '../upload/sign in.png', '../upload/Create new ticket- preview.png', '../upload/Ticket Details.png', '../upload/users.png'),
(78, 'Angled Inc', 'job platform', ' In this project we provide hospitals the ability to create new positions depending on job specialty.  We have different agencies who can see new positions. Agencies can create the candidates depending on job specialty. We have a matching system by which we can match candidates and positions on the basis of job specialty. Once the match is created hospital can see it and ask the candidates for an interview or reject them. After the interview hospital can assign the job to the specific person. Hospital can create a timesheet for that candidate. This timesheets defines the working hours and his overall bill.\r\nOur admin will be able to see everything that happens on the system. He can see positions created, candidates added and matches made. He can track all information of candidates and positions. ', 'Html, Css, Javascript, React js, Python, Django, flutter, hosted on aws', '../upload/angled-one-mock.png', 'Website Development', '../upload/home-angled.png', '../upload/About us.png', '../upload/blogs.png', '../upload/Contact us.png'),
(106, 'Debt to income Software', 'Software', '	Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/debt-main.png', 'Software Development', '../upload/Clients â€“ 17.png', '../upload/Clients â€“ 22.png', '../upload/Clients â€“ 37.png', '../upload/Clients â€“ 40.png'),
(95, 'Health Care', 'Responsive Website ', 'We have 3 panels in healthcare project. In health care project we provide hospitals the ability to create new positions depending on job specialty.  We have different agencies who can see new positions. Agencies can create the candidates depending on job specialty. We have a matching system by which we can match candidates and positions on the basis of job specialty. Once the match is created hospital can see it and ask the candidates for an interview or reject them. After the interview hospital can assign the job to the specific person. Hospital can create a timesheet for that candidate. This timesheets defines the working hours and his overall bill.\r\nOur admin will be able to see everything that happens on the system. He can see positions created, candidates added and matches made. He can track all information of candidates and positions', 'Html, Css, Javascript, React js, Python, Django, flutter, hosted on aws', '../upload/healthcare-main.png', 'Website Development', '../upload/Healthcare-1.jpg', '../upload/Healthcare-2.jpg', '../upload/Healthcare-3.jpg', '../upload/Healthcare-4.jpg'),
(99, 'Care plan Software', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/careplan-main.png', 'Software Development', '../upload/careplan-1.png', '../upload/careplan-2.png', '../upload/careplan-3.png', '../upload/careplan-4.png'),
(100, 'Care plan Design', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/careplan-main.png', 'UI/UX Design', '../upload/careplan-1.png', '../upload/careplan-2.png', '../upload/careplan-3.png', '../upload/careplan-4.png'),
(101, 'Clothable Software', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/clothable-main.png', 'Software Development', '../upload/clothable-1.png', '../upload/careplan-2.png', '../upload/careplan-3.png', '../upload/careplan-4.png'),
(103, 'Clothable', 'UI/UX design', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit	', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/clothable-main.png', 'UI/UX Design', '../upload/clothable-1.png', '../upload/careplan-2.png', '../upload/careplan-3.png', '../upload/careplan-4.png'),
(105, 'Debt to income Software', 'UI/UX', '	Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/debt-main.png', 'UI/UX Design', '../upload/Clients â€“ 17.png', '../upload/Clients â€“ 22.png', '../upload/Clients â€“ 37.png', '../upload/Clients â€“ 40.png'),
(107, 'Education', 'Education Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/education.png', 'Software Development', '../upload/edu-1.png', '../upload/edu-2.png', '../upload/edu-4.png', '../upload/edu-home.png'),
(108, 'Education', 'Education Software Design', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/education.png', 'UI/UX Design', '../upload/edu-1.png', '../upload/edu-2.png', '../upload/edu-4.png', '../upload/edu-home.png'),
(109, 'Form Builder', 'Form Builder Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/form-builder.png', 'Software Development', '../upload/form-builder-1.png', '../upload/form-builder-2.png', '../upload/form-builder-3.png', '../upload/form-builder-4.png'),
(110, 'Health Data', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/healthdata-software.png', 'Software Development', '../upload/health-data-1.png', '../upload/health-data-2.png', '../upload/health-data-5.png', '../upload/health-data-6.png'),
(111, 'Piranhand Software', 'Software', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/piranhead-s-main.png', 'Software Development', '../upload/piranhead-s1.png', '../upload/piranhead-s2.png', '../upload/piranhead-s3.png', '../upload/piranhead-s4.png'),
(112, 'Piranhad', 'Responsive Website ', 'A google adds making and designing platform where user can make his on Advertisement adds by using piranha designer tool and project work on web scraping fundamentals where hundreds of sites scraped and there screenshots is taken. When screenshot is gather user can place there adds on other websites screenshots to check there design is efficient on multiple websites.', 'Html, Css, Javascript, React js, Python, Django, flutter, hosted on aws', '../upload/piranhad-web.png', 'Website Development', '../upload/piranhad-web-home.png', '../upload/piranhad-web-product.png', '../upload/piranhad-pricing.png', '../upload/piranhad-review.png'),
(113, 'Arbi Web', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit	', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/arbi-web.png', 'Website Development', '../upload/arbi-review.png', '../upload/arbi-oppurtunity.png', '../upload/arbi-bid management.png', '../upload/arbi-business.png'),
(114, 'Arbi Web', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit	', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/arbi-web.png', 'UI/UX Design', '../upload/arbi-review.png', '../upload/arbi-oppurtunity.png', '../upload/arbi-bid management.png', '../upload/arbi-business.png'),
(115, 'Asaani Website', 'Responsive Website ', 'Asani website is specifically for the help of mankind. Now a days in busy life we have everything online. So to provide help to medical patients we launched Asani website. By using this website patients can buy their medicines online. What is so special about asani that we provide subsidized medicine. So the people who cannot afford costly medicine comes to Asani Website and buy their medicines.', 'Html, Css, Javascript, React js, Python, Django, flutter, hosted on aws', '../upload/asaani.png', 'Website Development', '../upload/asaani-3.png', '../upload/asaani-1.png', '../upload/asaani-5.png', '../upload/asaani-6.png'),
(116, 'Botion Website', 'Responsive Website ', '	Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/botion-main.png', 'Website Development', '../upload/botion-2.png', '../upload/botion-1.png', '../upload/botion-3.png', '../upload/botion-4.png'),
(117, 'Botion Design', 'UI/UX', '	Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/botion-main.png', 'UI/UX Design', '../upload/botion-2.png', '../upload/botion-1.png', '../upload/botion-3.png', '../upload/botion-4.png'),
(118, 'Cars Web', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/cars-web.png', 'Website Development', '../upload/cars-web-1.png', '../upload/cars-web-2.png', '../upload/cars-web-3.png', '../upload/cars-web-4.png'),
(119, 'Cars Web', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/cars-web.png', 'UI/UX Design', '../upload/cars-web-1.png', '../upload/cars-web-2.png', '../upload/cars-web-3.png', '../upload/cars-web-4.png'),
(120, 'Education Web', 'Responsive Education Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/edu-web-main.png', 'Website Development', '../upload/education-web-2.jpg', '../upload/education-web-1.jpg', '../upload/education-web-3.jpg', '../upload/education-web-4.jpg'),
(121, 'Arti Fox', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit	', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/artifox.png', 'Website Development', '../upload/arti-fox-1.png', '../upload/arti-fox-4.png', '../upload/arti-fox-6.png', '../upload/arti-fox-3.png'),
(122, 'Arti Fox', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit	', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/artifox.png', 'UI/UX Design', '../upload/arti-fox-1.png', '../upload/arti-fox-4.png', '../upload/arti-fox-6.png', '../upload/arti-fox-3.png'),
(123, 'GM-Shop', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/gm-shop-main.png', 'Website Development', '../upload/gm-shop4.png', '../upload/gm-shop3.png', '../upload/gm-shop1.png', '../upload/gm-shop2.png'),
(124, 'GM-Shop', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/gm-shop-main.png', 'UI/UX Design', '../upload/gm-shop4.png', '../upload/gm-shop3.png', '../upload/gm-shop1.png', '../upload/gm-shop2.png'),
(125, 'Angiled Inc 2', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/angiled-web-main.png', 'Website Development', '../upload/angled-inc-web-2.png', '../upload/angled-inc-web-4.png', '../upload/angled-inc-web-5.png', '../upload/angled-inc-web-3.png'),
(126, 'Fabulous Food', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/fab-food.png', 'Website Development', '../upload/food-web-1.jpg', '../upload/food-web-2.jpg', '../upload/food-web-3.jpg', '../upload/food-web-4.jpg'),
(127, 'Fabulous Food', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/fab-food.png', 'UI/UX Design', '../upload/food-web-1.jpg', '../upload/food-web-2.jpg', '../upload/food-web-3.jpg', '../upload/food-web-4.jpg'),
(128, 'Productly', 'Responsive Website ', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/productly.png', 'Website Development', '../upload/Productly-1.jpg', '../upload/Productly-3.jpg', '../upload/Productly-4.jpg', '../upload/Productly-15.jpg'),
(129, 'Productly', 'UI/UX', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/productly.png', 'UI/UX Design', '../upload/Productly-1.jpg', '../upload/Productly-3.jpg', '../upload/Productly-4.jpg', '../upload/Productly-15.jpg'),
(131, 'Builders Mobile App', 'App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/builders-mbl-app.png', 'Application Development', '../upload/builders-1.png', '../upload/builders-2.png', '../upload/buider-3.png', '../upload/builders-4.png'),
(132, 'Level-1 App', 'Mobile App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/level-1-app.png', 'Application Development', '../upload/level-1-1.png', '../upload/lvel-1-2.png', '../upload/level-1-3.png', '../upload/level-1-4.png'),
(133, 'Level 2 App', 'Mobile App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/level-2-app.png', 'Application Development', '../upload/level-2-1.png', '../upload/level-2-2.png', '../upload/level-2-3.png', '../upload/level-2-1.png'),
(134, 'Grocery Shopping App', 'Shopping App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma design file, W3ImageC validated HTML pages , Clean & minimal design, FontAwesome 5 , Cross-browser tested & optimized , Full-width layouts, No jQuery dependencies', '../upload/grocery-app.png', 'Application Development', '../upload/grocery-grid-1.png', '../upload/grocery-grid-2.png', '../upload/grocery-grid-3.png', '../upload/grocery-grid-4.png'),
(135, 'Refer Link App', 'Mobile App', 'Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Culpa Fuga Ex Illo Voluptates Omnis Provident Molestiae Aliquid Dicta Itaque, Unde Exercitationem, Nemo Architecto A. Quisquam Fugit Numquam Architecto Hic Atque. Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Odit, Officia Nemo Dolorem Iusto Autem Aliquid Delectus A Dignissimos Non Eius? Placeat Autem Quasi Accusamus, Voluptas Nisi Harum! Vel, Ab. Impedit', 'CSS3 & HTML5, Figma Design File, W3C Validated HTML Pages , Clean & Minimal Design, FontAwesome 5 , Cross-Browser Tested & Optimized , Full-Width Layouts', '../upload/refer-app.png', 'Application Development', '../upload/refer-grid-1.png', '../upload/refer-grid-2.png', '../upload/refer-grid-3.png', '../upload/refer-grid-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `quality_policy`
--

CREATE TABLE `quality_policy` (
  `id` int(11) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quality_policy`
--

INSERT INTO `quality_policy` (`id`, `des`) VALUES
(3, 'We invest in our human resource by providing them a conducive work environment and by providing them regular training, guidelines for skill development.'),
(2, 'Fabulous Technology Solution is a software development company that strives to provide the highest level of quality turnkey IT business solutions to its existing and potential customers while remaining compliant with national and local regulatory requirements.'),
(4, 'Itâ€™s the ultimate goal of Fabulous Technology Solution to become market leader in IT solutions by being customer centric, quick responsive to market needs and customer expectations.'),
(5, 'Our top management takes keen interest in the improvement of quality management system and related actions will be undertaken regularly to continually improve the process performance.');

-- --------------------------------------------------------

--
-- Table structure for table `services_hero`
--

CREATE TABLE `services_hero` (
  `id` int(11) NOT NULL,
  `services_hero_title` varchar(255) NOT NULL,
  `services_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_hero`
--

INSERT INTO `services_hero` (`id`, `services_hero_title`, `services_hero_des`) VALUES
(1, 'Comprehensive Software Development Solutions', 'Our software development solutions include website development services, mobile app development, UI/UX designing,  cloud-based solutions, and more. We ensure that all our software services are secure, user-friendly, and optimized for performance. Our goal is to help businesses improve their productivity, reduce costs, and enhance their customer experience through our comprehensive software development solutions. We use the latest technology and development practices to create robust, scalable, and efficient software applications.');

-- --------------------------------------------------------

--
-- Table structure for table `services_main`
--

CREATE TABLE `services_main` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_des` text NOT NULL,
  `service_link` varchar(255) NOT NULL,
  `service_icon` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_alt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_main`
--

INSERT INTO `services_main` (`id`, `service_title`, `service_des`, `service_link`, `service_icon`, `service_image`, `service_alt`) VALUES
(11, 'UI/UX Design', 'We pride ourselves on offering a complete range of UI/UX design services that are tailored to meet the unique needs of our clients. Our team of expert designers is dedicated to providing top-notch designs that are meticulously planned and executed to perfection.', 'ui-ux-service', '../upload/s-icon-2.png', '../upload/Ui_Ux-Design.jpg', 'UI/UX Services'),
(12, 'Application Development', 'At Fabtechsol, we specialize in developing custom applications that are designed to solve real-world problems and meet specific business needs. Our experienced team of developers has a proven track record of delivering high-quality applications that are reliable, scalable, and easy to use.', 'app-dev-service', '../upload/s-icon-2.png', '../upload/Mobile-Application.jpg', 'application development services'),
(13, 'Software Development', 'At Fabtechsol, we believe in developing software solutions that are tailored to our clients\' unique requirements. Our team of experienced engineers is passionate about creativity, quality, and optimization, ensuring that we deliver software solutions that meet our clients\' needs and exceed their expectations.', 'software-dev-service', '../upload/s-icon-2.png', '../upload/software-devt-service.jpg', 'software company service'),
(14, 'Website Development', 'At Fabtechsol, we work with clients across various industries, from healthcare and finance to e-commerce and entertainment. Our team has the experience and expertise to develop customized website solutions that align with our clients\' business goals and help them stay ahead of the competition.', 'web-dev-service.php', '../upload/s-icon-2.png', '../upload/website-devt-service.jpg', 'website development services');

-- --------------------------------------------------------

--
-- Table structure for table `services_meta`
--

CREATE TABLE `services_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_meta`
--

INSERT INTO `services_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions provide end-to-end product development, IT consulting, software development and innovative technology solutions across the Americas, Europe, and the Asia Pacific regions.');

-- --------------------------------------------------------

--
-- Table structure for table `service_sec`
--

CREATE TABLE `service_sec` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` text NOT NULL,
  `des` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_sec`
--

INSERT INTO `service_sec` (`id`, `heading`, `sub_heading`, `des`) VALUES
(1, 'Our Services', 'Fabtechsol Software Development Services', 'FabTechSol offers a comprehensive range of services to help businesses thrive in the digital age. From custom software development to mobile app development, web development, UI/UX design, blockchain development, enterprise software integration, cloud computing, and digital transformation consulting, our team of experts is committed to delivering solutions that cater to different industries and business needs. We work closely with our clients to understand their requirements and create tailor-made solutions that help them achieve their business goals. Our services are designed to be user-friendly, engaging, scalable, secure, and optimized for speed and efficiency. ');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `lnk` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `email`, `phone`, `location`, `twitter`, `fb`, `insta`, `lnk`) VALUES
(1, 'info@fabtechsol.com', '+923475879566', 'Akbar Plaza near Rescue 1122 Sialkot', ' https://twitter.com/Fabtechsol0', 'https://www.facebook.com/fabulousolutions/', 'https://www.instagram.com/fabulous_technology_solutions/?hl=en', 'https://www.linkedin.com/company/fabulous-technology-solutions/');

-- --------------------------------------------------------

--
-- Table structure for table `software_hero`
--

CREATE TABLE `software_hero` (
  `id` int(11) NOT NULL,
  `software_hero_title` varchar(255) NOT NULL,
  `software_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software_hero`
--

INSERT INTO `software_hero` (`id`, `software_hero_title`, `software_hero_des`) VALUES
(1, 'Software Development', 'Software development services encompass the planning, designing, developing, integrating, testing, managing, and evolving of software solutions. At Fabtechsol, we are quality-focused and committed to mature software development practices, providing application development services to startups, software companies, and enterprises across 30+ industries. Our end-to-end development services cover everything from business analysis to software delivery and support. We can help modernize your legacy software or augment your team with our IT experts at any stage of the software development life cycle (SDLC).');

-- --------------------------------------------------------

--
-- Table structure for table `software_meta`
--

CREATE TABLE `software_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software_meta`
--

INSERT INTO `software_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions develop softwares from scratch depending on client requirements, with a passion for creativity, quality, and optimization.');

-- --------------------------------------------------------

--
-- Table structure for table `software_process`
--

CREATE TABLE `software_process` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `list_item` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software_process`
--

INSERT INTO `software_process` (`id`, `heading`, `des`, `icon`, `list_item`) VALUES
(1, 'Planning and Requirements Gathering', 'In this phase, we work with our clients to understand their business goals and objectives, as well as the specific requirements and functionality that they need in their software.\r\nThis includes conducting stakeholder interviews, analyzing your current processes, and creating a detailed project plan.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(2, 'Design and Prototyping', 'In this phase, we create wireframes and prototypes to visualize the user experience and layout of the software.\r\nWe also work with our clients to refine and iterate on the design until it meets their needs and expectations.\r\n', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(3, 'Development', 'During the development phase, our team of software engineers works to build and implement the software according to the agreed-upon design and requirements.\r\nThis includes coding, testing, and debugging the software to ensure it is of high quality and meets clients needs.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(5, 'Testing and Quality Assurance', 'In this phase, we thoroughly test the software to ensure it is reliable and performs as expected.\r\nThis includes conducting both automated and manual testing, as well as implementing any necessary bug fixes.', '../upload/s-icon-2 (1).png', ''),
(6, 'Deployment ', 'In the final phase, we help our clients to deploy the software to their desired environment.', '../upload/s-icon-2 (1).png', ''),
(7, ' Maintenance', 'After the software is deployed, we provide ongoing maintenance and support, including fixing any bugs that are discovered and adding new features as needed.', '../upload/s-icon-2 (1).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`s_id`, `s_name`, `s_email`) VALUES
(10, 'butterfly', 'mehakamir187@gmail.com'),
(9, 'butterfly', 'mehakamir187@gmail.com'),
(11, 'mehak', 'mehakamir151@gmail.com'),
(12, 'mehak', 'mehakamir151@gmail.com'),
(13, 'mehak', 'mehakamir1551@gmail.com'),
(14, 'mehak', 'mehakamir1551@gmail.com'),
(15, 'mehak', 'mehakamir15ggg1@gmail.com'),
(16, 'butterfly', 'mehakamir18f7@gmail.com'),
(17, 'butterfly', 'mehakamir18997@gmail.com'),
(18, 'butterfly', 'mehakamir18997@gmail.com'),
(19, 'mehak', 'mehakamir15ggg1@gmail.com'),
(20, '', ''),
(21, '', ''),
(22, 'butterfly', 'mehakamir189e97@gmail.com'),
(23, 'butterfly', 'mehakamir189e97@gmail.com'),
(24, 'mehak', 'mehakamirs151@gmail.com'),
(25, 'mehak', 'mehakamirs151@gmail.com'),
(26, 'Jennifer Obrien', 'mehakamir1d51@gmail.com'),
(27, 'Jennifer Obrien', 'mehakamir1d51@gmail.com'),
(28, 'mehak', 'mehakamir15d1@gmail.com'),
(29, 'mehak', 'mehakamir15d1@gmail.com'),
(30, 'fabtechsolutions853@gmail.com', 'fabechsolutions853@gmail.com'),
(31, 'mehak', 'mehakamir15df1@gmail.com'),
(32, 'mehak', 'mehakamir1445d1@gmail.com'),
(33, 'mehak', 'mehakamir1445d1@gmail.com'),
(34, 'Jennifer Obrien', 'mehakamir15d7771@gmail.com'),
(35, 'Jennifer Obrien', 'mehakamir15d7771@gmail.com'),
(36, 'mehak', 'mehaka55mir1551@gmail.com'),
(37, 'mehak', 'mehaka55mir1551@gmail.com'),
(38, 'Mehak ', 'mehakamir18hjkk7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tech_tbl`
--

CREATE TABLE `tech_tbl` (
  `id` int(11) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `tech_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_tbl`
--

INSERT INTO `tech_tbl` (`id`, `tech_name`, `tech_img`) VALUES
(49, 'Laravel', '../upload/laravel.png'),
(48, 'PHP', '../upload/php e.png'),
(46, 'Python', '../upload/technology-1.png'),
(47, 'Django', '../upload/django.png'),
(45, 'Flutter', '../upload/flutter e.png'),
(44, 'Next JS', '../upload/js.png'),
(43, 'Angular JS', '../upload/angular.png'),
(42, 'React JS', '../upload/react-js.png'),
(41, 'Java Script', '../upload/js-icn.png'),
(40, 'Bootstrap', '../upload/bs-icn.png'),
(39, 'CSS', '../upload/css-icn.png'),
(38, 'HTML ', '../upload/html5-icn.png'),
(37, 'Illustrator', '../upload/illutrator-icn.png'),
(36, 'Figma', '../upload/figma e.png'),
(34, 'Adobe XD', '../upload/xd-icn.png'),
(35, 'Photoshop', '../upload/photoshop-icn.png'),
(50, 'Node JS', '../upload/node js e.png'),
(51, 'Asp.Net', '../upload/asp.net.png'),
(52, 'Dart', '../upload/dart.png'),
(53, 'React Native', '../upload/react-native.png'),
(54, 'Kotlin', '../upload/image (2).png'),
(55, 'Swift', '../upload/swift.png'),
(56, 'Wix', '../upload/image (1).png'),
(57, 'WordPress', '../upload/wordPress-icn.png'),
(58, 'Square Space', '../upload/squarespace.png'),
(59, 'AWS', '../upload/aws.png'),
(60, 'Heroku', '../upload/heroku.png'),
(61, 'Firebase', '../upload/firebase.png'),
(62, 'Hostinger', '../upload/hostinger.png'),
(63, 'SQL', '../upload/database.png'),
(64, 'MySQL', '../upload/database.png'),
(65, 'Mongo DB', '../upload/mongo-db.png'),
(66, 'Postgres', '../upload/postgres.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `heading`, `sub_heading`, `des`) VALUES
(1, 'Testimonial', 'What Our Customers Are Talking About', 'At Fabtechsol, we have a proven track record of successfully completing hundreds of projects, giving us the experience and expertise necessary to develop a robust development structure that can help you avoid early mistakes in turning your vision into a reality. Our team understands the importance of providing high-quality software development services that align with our clients\' goals and objectives.');

-- --------------------------------------------------------

--
-- Table structure for table `ui_hero`
--

CREATE TABLE `ui_hero` (
  `id` int(11) NOT NULL,
  `ui_hero_title` varchar(255) NOT NULL,
  `ui_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ui_hero`
--

INSERT INTO `ui_hero` (`id`, `ui_hero_title`, `ui_hero_des`) VALUES
(1, 'UI/UX Designing ', 'The web design services offered by Fabtechsol team comprise the essential processes of user interface (UI) and user experience (UX) design for any web-based solution. We ensure that each of our web design projects strikes a balance between technology, visual aesthetics, and business objectives, resulting in fast-loading, impactful, and high-converting online experiences. That\'s why we offer UI and UX design services to help businesses create an engaging and effective online presence.');

-- --------------------------------------------------------

--
-- Table structure for table `ui_meta`
--

CREATE TABLE `ui_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ui_meta`
--

INSERT INTO `ui_meta` (`id`, `meta_des`) VALUES
(1, 'Fabulous Technology Solutions offer a full range of ui ux design services including wireframes, mockups, prototypes, and production ready designs.');

-- --------------------------------------------------------

--
-- Table structure for table `ui_process`
--

CREATE TABLE `ui_process` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `list_item` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ui_process`
--

INSERT INTO `ui_process` (`id`, `heading`, `des`, `icon`, `list_item`) VALUES
(1, 'Discovery and Research', 'During this phase, we work with our clients to understand their business goals and target audience. We conduct user research and gather insights through interviews, surveys, and other methods. This will help us create a clear picture of users\' needs and pain points, as well as their expectations for the product or service.\r\n', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(2, 'Information Architecture and Wireframing', 'In this phase, we will create a high-level structure for the user interface (UI) and user experience (UX). We will define the main navigation and layout, as well as create wireframes to visualize the user flow and interactions. This will allow us to test and iterate on the design before moving on to the visual design phase.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(3, 'Visual Design', 'In the visual design phase, we create a cohesive and visually appealing design for the product or service. We create a style guide, including typography, color palette, and graphic elements, to ensure a consistent look and feel across the UI. We will also create high-fidelity mockups to showcase the final design.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(5, 'Development and Testing', 'In this phase, we work with developers to build and implement the UI and UX designs. We also conduct usability testing to ensure that the product or service is easy and intuitive to use. We will iterate on the design based on user feedback and testing results, until we have a final product that meets the needs of your users and your business goals.', '../upload/s-icon-2 (1).png', ''),
(6, 'Launch and Maintenance', 'Once the product or service is launched, we will continue to monitor and analyze user behavior and feedback to identify areas for improvement. We will work with client to implement any necessary updates and improvements to the UI and UX, to ensure that the product or service remains user-friendly and effective over time.', '../upload/s-icon-2 (1).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_hero`
--

CREATE TABLE `web_hero` (
  `id` int(11) NOT NULL,
  `web_hero_title` varchar(255) NOT NULL,
  `web_hero_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_hero`
--

INSERT INTO `web_hero` (`id`, `web_hero_title`, `web_hero_des`) VALUES
(1, 'Website Development', 'Being one of the leading Website Development Company we provide extraordinary Website Development Services for small businesses, large-scale enterprises and start-ups. It is best suited for the all type of industries, startups, global clients and organizations to promote their business in global market. Website is most important part of any organization. Without website your business can\'t be successful. Fabtechsol offers high quality web designing service at a affordable price along with SEO, CMS and other features to grow your business and create remarkable business identity');

-- --------------------------------------------------------

--
-- Table structure for table `web_meta`
--

CREATE TABLE `web_meta` (
  `id` int(11) NOT NULL,
  `meta_des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_meta`
--

INSERT INTO `web_meta` (`id`, `meta_des`) VALUES
(1, 'With Careful Design And Amazing Web Development Skills, Fabulous Technology Solutions Exploit These Recent Technological Developments To Create Customized Solutions For Any Industry.');

-- --------------------------------------------------------

--
-- Table structure for table `web_process`
--

CREATE TABLE `web_process` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `icon` varchar(255) NOT NULL,
  `list_item` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_process`
--

INSERT INTO `web_process` (`id`, `heading`, `des`, `icon`, `list_item`) VALUES
(10, 'Planning', 'Our first step in our website development service is to understand the client\'s business goals and objectives, target audience, and preferred features for their website. We work intently with the client to acquire all the important facts and create a detailed project plan', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(9, 'Designing', 'According to the project plan our designers will create wireframes and prototypes for the client\'s review and approval. We also work with the client to choose the right colors, fonts, and images to create a cohesive and visually appealing website.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(12, 'Development', 'After the design is approved, our developers will start building the website according to the approved plan. We use the modern tools and techniques to ensure that the website is responsive, user-friendly, browser compatible and optimized for search engines.', '../upload/s-icon-2 (1).png', 'Dedicated Project Team, Direct Communication'),
(13, 'Testing ', 'Once the website is built, we thoroughly test it to make sure that it functions as supposed and meets all the particular requirements. This includes testing on specific gadgets and browsers to ensure compatibility.', '../upload/s-icon-2 (1).png', ''),
(14, 'Deployment', 'After the completion of testing phase and the client\'s approval, we will deploy it to the intended hosting environment.', '../upload/s-icon-2 (1).png', ''),
(15, 'Maintenance', 'We provide ongoing support and maintenance services to ensure that the website stays up-to-date and secure. We also offer additional services such as website updates, backups, and performance optimization as needed.\r\n', '../upload/s-icon-2 (1).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE `who_we_are` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `heading`, `des`) VALUES
(2, 'who we are', 'Founded in 2017, Fabulous Technology Solutions is a full-service technology company that has been at the forefront of creating game-changing, modern technology products with the latest technologies and techniques for clients across the world. The success of our business mainly lies in building a team of A-players, who work together and build together, and who crave perfection in everything they produce for our elite clients.');

-- --------------------------------------------------------

--
-- Table structure for table `why_fab`
--

CREATE TABLE `why_fab` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `why_fab`
--

INSERT INTO `why_fab` (`id`, `heading`, `sub_heading`, `des`) VALUES
(1, 'Why Choose', 'Few reasons for people choosing Fabtechsol', 'There are several reasons why people choose Fabtechsol for their software development and web service needs. Firstly, we have an experienced team of developers and designers committed to delivering top-quality solutions that meet each client\'s unique needs. We take a client-focused approach, meaning that we work closely with our clients to understand their requirements and provide tailored solutions that exceed their expectations. If you\'re looking for a reliable software development company to help you achieve your business goals, look no further than Fabtechsol.');

-- --------------------------------------------------------

--
-- Table structure for table `why_fab_points`
--

CREATE TABLE `why_fab_points` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `point_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `why_fab_points`
--

INSERT INTO `why_fab_points` (`id`, `icon`, `point_name`) VALUES
(3, '../upload/why-fab-2.png', 'Direct Communication'),
(2, '../upload/why-fab-1.png', 'Dedicated Team'),
(4, '../upload/why-fab-3.png', 'Fast Solutions'),
(5, '../upload/why-fab-4.png', 'On Time Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `work_flow`
--

CREATE TABLE `work_flow` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_flow`
--

INSERT INTO `work_flow` (`id`, `heading`, `des`, `icon`) VALUES
(1, 'Get your requirements ready', 'Before starting any project you must be very clear in sense of your project requirements, get it on paper/Plan zoom meeting with us', '../upload/send-dark.png'),
(4, 'Chat with us', 'You can chat with us through our customer care app on play store and ios store, or simply you can use our email and whatsapp to schedule a call.', '../upload/chat-dark.png'),
(5, 'Get Your Project done', 'After software requirements analysis our team will provide you a deadline to complete the project and through our customer support app will be involved with you for proper updates', '../upload/done-dark.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_app`
--
ALTER TABLE `about_app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_company`
--
ALTER TABLE `about_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_company_home`
--
ALTER TABLE `about_company_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_hero`
--
ALTER TABLE `about_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_meta`
--
ALTER TABLE `about_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_project`
--
ALTER TABLE `about_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_software`
--
ALTER TABLE `about_software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_ui`
--
ALTER TABLE `about_ui`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_web`
--
ALTER TABLE `about_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_hero`
--
ALTER TABLE `app_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_meta`
--
ALTER TABLE `app_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_process`
--
ALTER TABLE `app_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_hero`
--
ALTER TABLE `blog_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_main`
--
ALTER TABLE `blog_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_meta`
--
ALTER TABLE `blog_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ceo_msg`
--
ALTER TABLE `ceo_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_hero`
--
ALTER TABLE `contact_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_meta`
--
ALTER TABLE `contact_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_value_box`
--
ALTER TABLE `core_value_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_hero`
--
ALTER TABLE `courses_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_main`
--
ALTER TABLE `courses_main`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_form`
--
ALTER TABLE `course_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_heading`
--
ALTER TABLE `events_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_hero`
--
ALTER TABLE `events_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_imgs`
--
ALTER TABLE `events_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hired_hero`
--
ALTER TABLE `hired_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hired_meta`
--
ALTER TABLE `hired_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring_form`
--
ALTER TABLE `hiring_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_hero`
--
ALTER TABLE `home_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_meta`
--
ALTER TABLE `home_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_approach`
--
ALTER TABLE `our_approach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_core_values`
--
ALTER TABLE `our_core_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_mission`
--
ALTER TABLE `our_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_vision`
--
ALTER TABLE `our_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perk`
--
ALTER TABLE `perk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previous_record`
--
ALTER TABLE `previous_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_hero`
--
ALTER TABLE `project_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_meta`
--
ALTER TABLE `project_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_portfolio`
--
ALTER TABLE `project_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_policy`
--
ALTER TABLE `quality_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_hero`
--
ALTER TABLE `services_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_main`
--
ALTER TABLE `services_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_meta`
--
ALTER TABLE `services_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_sec`
--
ALTER TABLE `service_sec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_hero`
--
ALTER TABLE `software_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_meta`
--
ALTER TABLE `software_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_process`
--
ALTER TABLE `software_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tech_tbl`
--
ALTER TABLE `tech_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_hero`
--
ALTER TABLE `ui_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_meta`
--
ALTER TABLE `ui_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_process`
--
ALTER TABLE `ui_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_hero`
--
ALTER TABLE `web_hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_meta`
--
ALTER TABLE `web_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_process`
--
ALTER TABLE `web_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `who_we_are`
--
ALTER TABLE `who_we_are`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_fab`
--
ALTER TABLE `why_fab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_fab_points`
--
ALTER TABLE `why_fab_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_flow`
--
ALTER TABLE `work_flow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_app`
--
ALTER TABLE `about_app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_company`
--
ALTER TABLE `about_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_company_home`
--
ALTER TABLE `about_company_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_hero`
--
ALTER TABLE `about_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_meta`
--
ALTER TABLE `about_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_project`
--
ALTER TABLE `about_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_software`
--
ALTER TABLE `about_software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_web`
--
ALTER TABLE `about_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_hero`
--
ALTER TABLE `app_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_meta`
--
ALTER TABLE `app_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_process`
--
ALTER TABLE `app_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_hero`
--
ALTER TABLE `blog_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_main`
--
ALTER TABLE `blog_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `blog_meta`
--
ALTER TABLE `blog_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ceo_msg`
--
ALTER TABLE `ceo_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_hero`
--
ALTER TABLE `contact_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_meta`
--
ALTER TABLE `contact_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_value_box`
--
ALTER TABLE `core_value_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses_hero`
--
ALTER TABLE `courses_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses_main`
--
ALTER TABLE `courses_main`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_form`
--
ALTER TABLE `course_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `events_heading`
--
ALTER TABLE `events_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_hero`
--
ALTER TABLE `events_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_imgs`
--
ALTER TABLE `events_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `expert`
--
ALTER TABLE `expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hired_hero`
--
ALTER TABLE `hired_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hired_meta`
--
ALTER TABLE `hired_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hiring_form`
--
ALTER TABLE `hiring_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `home_hero`
--
ALTER TABLE `home_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_meta`
--
ALTER TABLE `home_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `our_approach`
--
ALTER TABLE `our_approach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_core_values`
--
ALTER TABLE `our_core_values`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_mission`
--
ALTER TABLE `our_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_vision`
--
ALTER TABLE `our_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perk`
--
ALTER TABLE `perk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `previous_record`
--
ALTER TABLE `previous_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_hero`
--
ALTER TABLE `project_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_meta`
--
ALTER TABLE `project_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_portfolio`
--
ALTER TABLE `project_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `quality_policy`
--
ALTER TABLE `quality_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services_hero`
--
ALTER TABLE `services_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_main`
--
ALTER TABLE `services_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services_meta`
--
ALTER TABLE `services_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_sec`
--
ALTER TABLE `service_sec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `software_hero`
--
ALTER TABLE `software_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `software_meta`
--
ALTER TABLE `software_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `software_process`
--
ALTER TABLE `software_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tech_tbl`
--
ALTER TABLE `tech_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui_hero`
--
ALTER TABLE `ui_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui_meta`
--
ALTER TABLE `ui_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui_process`
--
ALTER TABLE `ui_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_hero`
--
ALTER TABLE `web_hero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_meta`
--
ALTER TABLE `web_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_process`
--
ALTER TABLE `web_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_fab`
--
ALTER TABLE `why_fab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_fab_points`
--
ALTER TABLE `why_fab_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `work_flow`
--
ALTER TABLE `work_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
