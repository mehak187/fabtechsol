<style>
  /* ================================
          BASE
================================= */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .container {
    max-width: 1300px;
    padding: 0 20px;
    width: 100%;
    margin: 0 auto;
  }

  :root {
    --blue-1: #16243D;
    --blue-dark: #111D32;
    --blue-dark2: #0F192C;
    --blue-sky: #015FC9;
    --blue-light: #0CE0FF;
    --grey-1: #979CA0;
  }

  body {
    font-family: Arial, Courier New, Times New Roman;
  }

  a {
    transition: all 0.3s;
  }

  .blue-btn a,
  .blue-btn input[type=submit] {
    background: var(--blue-sky);
    border: 2px solid var(--blue-sky);
    border-radius: 6px;
    padding: 10px 15px;
    text-decoration: none;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 18px;
    transition: all 0.3s;
    display: block;
    cursor: pointer;
  }

  .blue-btn a:hover,
  .blue-btn input[type=submit]:hover {
    background-color: transparent;
  }

  h6 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.3;
  }

  .m-head {
    color: #97A2B7;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.3;
  }

  h2 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 50px;
    line-height: 1.2;
  }

  .h-para {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  h3 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  h4,
  .h4 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 30px;
    line-height: 1.2;
  }

  h5 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 27px;
    line-height: 1.2;
  }

  p {
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    color: var(--grey-1);
    line-height: 1.3;
  }


  .contact-us-sec input:-webkit-autofill,
  .contact-us-sec input:-webkit-autofill:hover,
  .contact-us-sec input:-webkit-autofill:focus,
  .contact-us-sec textarea:-webkit-autofill,
  .contact-us-sec textarea:-webkit-autofill:hover,
  .contact-us-sec textarea:-webkit-autofill:focus,
  .contact-us-sec select:-webkit-autofill,
  .contact-us-sec select:-webkit-autofill:hover,
  .contact-us-sec select:-webkit-autofill:focus {
    border: 1px solid var(--blue-light);
    -webkit-text-fill-color: #97A2B7;
    -webkit-box-shadow: 0 0 0px 1000px var(--blue-1) inset;
    transition: background-color 5000s ease-in-out 0s;
  }

  .contact-con input:-webkit-autofill,
  .contact-con input:-webkit-autofill:hover,
  .contact-con input:-webkit-autofill:focus,
  .contact-con textarea:-webkit-autofill,
  .contact-con textarea:-webkit-autofill:hover,
  .contact-con textarea:-webkit-autofill:focus,
  .contact-con select:-webkit-autofill,
  .contact-con select:-webkit-autofill:hover,
  .contact-con select:-webkit-autofill:focus {
    border: 1px solid var(--blue-light);
    -webkit-text-fill-color: #97A2B7;
    -webkit-box-shadow: 0 0 0px 1000px var(--blue-1) inset;
    transition: background-color 5000s ease-in-out 0s;
  }



  /* ------default scrollbar------ */
  body::-webkit-scrollbar {
    width: 4px;
    height: 14px;
  }

  body::-webkit-scrollbar-track {
    background: var(--blue-dark2);
  }

  body::-webkit-scrollbar-thumb {
    background: var(--grey-1);
    border-radius: 8px;
  }

  /* ================================
      Primary nav bar
================================= */
  .primary-nav-wrapper {
    background: var(--blue-1);
    padding: 10px 0;
    box-shadow: rgba(0, 0, 0, 0.10) 0px 10px 10px, rgba(0, 0, 0, 0.20) 0px 6px 6px;
    position: relative;
  }

  .primary-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .primary-nav>div {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .primary-nav .p-nav-left a {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-right: 40px;
  }

  .primary-nav .p-nav-left .icon {
    margin-right: 10px;
    cursor: pointer;
  }

  .primary-nav .p-nav-left .icon img {
    width: 100%;
    height: 100%;
  }

  .primary-nav a {
    color: var(--grey-1);
    text-decoration: none;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.3;
    position: relative;
  }

  .primary-nav .active a:before {
    content: " ";
    position: absolute;
    background: url("img/active-icon.png") no-repeat;
    width: 14px;
    height: 12px;
    bottom: -14px;
    left: 50%;
    transform: translateX(-50%);
  }

  .primary-nav a:hover {
    text-decoration: underline
  }

  .primary-nav .p-nav-right ul {
    list-style: none;
    display: flex;
    align-items: center;
  }

  .primary-nav .p-nav-right .p-links li {
    margin: 0 15px
  }

  .primary-nav .p-nav-right .p-links {
    margin-right: 30px;
  }

  .primary-nav .p-nav-right .p-social a {
    margin: 0 16px;
    display: block;
  }

  .primary-nav .p-nav-right .p-social img {
    vertical-align: middle;
    width: 100%;
    height: 100%;
  }

  .primary-nav .p-nav-right .p-social a:hover {
    opacity: 0.8
  }

  .primary-nav .p-nav-right .p-social li:last-child a {
    margin-right: 0
  }

  /* ================================
         Main navbar
================================= */
  nav {
    background: var(--blue-dark);
    padding: 20px 0;
  }

  .main-nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  /* -------logo styling------ */
  .main-nav .logo {
    display: flex;
    align-items: center;
    cursor: pointer;
    margin-left: -40px
  }

  .main-nav .logo .logo-img {
    margin-right: 5px;
  }

  .main-nav .logo .logo-img img {
    width: 100%;
    height: 100%;
    vertical-align:middle;
  }

  .main-nav .logo span {
    display: block;
  }

  .main-nav .logo span:first-child {
    color: var(--blue-sky);
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 25px;
    letter-spacing: 2px
  }

  .main-nav .logo span:last-child {
    color: #D3E3F5;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 12px;
    line-height: 1.4;
  }

  .main-nav-r {
    display: flex;
    align-items: center;
  }

  /* ----------navbox----------- */
  .main-nav .navbox {
    background: var(--blue-dark2);
    border-radius: 5px;
    margin-right: 15px;
  }

  .main-nav .navbox ul {
    list-style: none;
    display: flex;
    align-items: center;
  }

  .main-nav .navbox li {
    padding: 10px 14px;
  }

  .main-nav .navbox a {
    text-decoration: none;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.4;
    color: #fff;
    display: block;
    position: relative;
  }

  .main-nav .navbox a:before {
    content: " ";
    position: absolute;
    bottom: -1px;
    left: 50%;
    background-color: #fff;
    width: 0;
    height: 1px;
    transition: all 0.2s ease-in-out;
    transition-duration: 0.6s;
    transform: translateX(-50%);
  }

  .main-nav .navbox .active a {
    position: relative
  }

  .main-nav .navbox .active a:before {
    content: " ";
    position: absolute;
    background: url("img/active-icon.png") no-repeat;
    width: 14px;
    height: 12px;
    bottom: -11px;
    left: 50%;
  }

  .main-nav .navbox .active a:hover:before {
    width: 14px;
  }

  .main-nav .navbox a:hover:before {
    width: 100%;
  }

  .main-nav .navbox .icons {
    padding: 0;
  }

  .main-nav .navbox img {
    padding: 10px 5px 10px 13px;
    vertical-align: middle;
  }

  .main-nav .navbox .search {
    cursor: pointer;
    opacity: 0.8;
    transition: all 0.3s;
    width: 40px;
    height: 37px;
  }

  .main-nav .navbox .search:hover {
    opacity: 0.6
  }

  .main-nav .navbox img:last-child {
    padding: 10px 15px 10px 8px;
  }

  .main-nav .navbox .chat-btn {
    background: var(--blue-sky);
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border: 2px solid var(--blue-sky);
    padding: 0;
  }

  .main-nav .navbox .chat-btn a {
    padding: 10px 15px;
    transition: all 0.3s;
  }

  .main-nav .navbox .hero-btn:hover {
    background-color: transparent;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
  }

  .main-nav .navbox img {
    width: 19px;
    height: 42px;
  }

  /* -------------Call------------ */

  .call {
    display: flex;
    align-items: center;
    text-decoration: none;
  }

  .call span {
    display: block;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
  }

  .call span:first-child {
    font-size: 16px;
    color: #fff;
    line-height: 1.4;
  }

  .call span:last-child {
    font-size: 14px;
    color: #707070;
    margin-top: 2px;
  }

  .call .icon {
    margin-right: 7px;
    width: 45px;
    height: 45px;
  }

  .call .icon img {
    width: 100%;
    height: 100%;
  }

  /* =========Responsive NAV============ */
  .main-nav .togg {
    transition: all 0.3s;
    cursor: pointer;
    margin-right: 20px;
    display: none;
  }

  .main-nav .togg img {
    width: 40px;
    height: 40px;
  }

  .main-nav .togg:hover {
    opacity: 0.8;
  }

  /* ----------mbl nav--------- */
  .mbl-nav {
    position: fixed;
    z-index: 200;
    height: 100%;
    background: var(--blue-sky);
    left: 0;
    top: 0;
    padding: 45px 20px;
    width: 250px;
    display: none;
    overflow:auto;
  }
  
  .mbl-nav::-webkit-scrollbar {
    width: 8px;
  }

  .mbl-nav::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 8px;
  }

  .mbl-nav::-webkit-scrollbar-thumb {
    background: var(--blue-sky);
    border-radius: 8px;
    border: 2px solid #fff;
  }

  .mbl-nav .close {
    position: absolute;
    top: 20px;
    right: 20px;
    transition: all 0.3s;
    cursor: pointer;
    display: none;
  }

  .mbl-nav .close:hover {
    opacity: 0.8
  }

  .mbl-nav .close img {
    width: 20px;
    height: 20px;
  }

  .main-nav .mbl-nav ul {
    list-style: none;
  }

  .main-nav .mbl-nav ul li {
    margin-top: 12px
  }

  .main-nav .mbl-menu a {
    text-decoration: none;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 18px;
    line-height: 1.4;
    color: #fff;
    display: block;
    border-bottom: 1px solid var(--grey-1);
    transition: all 0.3s;
    position: relative;
  }

  .main-nav .mbl-menu a:before {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 50%;
    background-color: var(--blue-dark);
    width: 0;
    height: 2px;
    transition: all 0.2s ease-in-out;
    transition-duration: 0.6s;
    transform: translateX(-50%);
  }

  .main-nav .mbl-menu a:hover:before {
    width: 100%;
  }

  .main-nav .res-con {
    align-items: center;
    display: none;
  }

  .res-con .mbl-hero {
    display: none;
  }

  .res-con .mbl-chat a {
    text-decoration: none;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    line-height: 1;
    color: #fff;
    padding: 12px 18px;
    background: var(--blue-sky);
    border: 2px solid var(--blue-sky);
    border-radius: 5px;
    display: block;
    transition: all 0.3s;
  }

  .res-con .mbl-chat a:hover {
    background-color: transparent;
  }

  /* ----------call-mbl and search mbl------ */
  .call-mbl {
    display: flex;
    color: #000;
    margin-top: 25px;
  }

  .main-nav .call-mbl span:last-child {
    color: #fff;
    opacity: 0.8
  }

  .search-mbl {
    display: flex;
    align-items: center;
    background: #fff;
    margin-top: 20px
  }

  .search-mbl .icons {
    background: var(--blue-dark);
    padding: 7px 10px;
  }

  .search-mbl .icons img {
    width: 16px;
    height: 16px
  }

  .search-mbl input {
    padding: 7px 10px;
    width: 100%;
    border: none
  }

  .search-mbl input:focus {
    outline: none;
  }

  /* -------clickable-search-operation----- */

  .main-nav .navbox ul {
    position: relative;
  }

  .main-nav .navbox .search-box-d {
    position: absolute;
    z-index: 100;
    max-width: 570px;
    width: 100%;
    display: none
  }

  .main-nav .navbox input {
    width: 100%;
    padding: 14px 15px;
    border: none;
    background: var(--blue-dark2);
    color: var(--grey-1);
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
  }

  .main-nav .navbox input::placeholder {
    /* color: #97A2B7; */
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
  }

  .main-nav .navbox input:focus {
    outline: none;
  }

  /* ------dropdown---- */
  .main-nav .navbox .dropdown-main {
    position: relative;
  }

  /* ---dropdown-polygon--- */
  .main-nav .dropdown-main:before {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 12px solid var(--blue-sky);
    bottom: 0px;
    left: 50%;
    transform: translatex (-50%);
    display: none;
    z-index: 202;
  }

  .main-nav .navbox .dropdown-main:hover:before {
    display: block;
  }

  .main-nav .navbox .dropdown-main .dropdown-menu {
    position: absolute;
    display: block;
    background: var(--blue-dark2);
    display: none;
    top: 100%;
    /* left: 50%; */
    /* transform: translateX(-50%); */
    width: 220px;
    border-radius: 7px;
    border: 1px solid var(--blue-sky);
    text-align: center;
    z-index: 150;
  }

  .main-nav .dropdown-menu:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 12px;
    background: var(--blue-dark2);
    top: -13px;
    ;
    left: 0;
    z-index: 200;
  }

  .main-nav .navbox .dropdown-main:hover .dropdown-menu {
    display: block;
  }

  .main-nav .navbox .dropdown-main .dropdown-menu li {
    display: block;
    width: 100%;
    border-bottom: 1px solid var(--grey-1);
  }

  .main-nav .navbox .dropdown-main .dropdown-menu li:last-child {
    border-bottom: none;
  }

  .main-nav .navbox .dropdown-main .dropdown-menu li:hover {
    background: var(--blue-sky);
  }

  .main-nav .navbox .active.dropdown-main .dropdown-menu a:before {
    background: none;
  }

  /* ================================
          Hero Section
================================= */
  .hero-wrapper {
    background: url("img/home-hero-changed.png") no-repeat;
    background-size: cover;
    background-position: center
  }

  .hero {
    max-width: 44%;
    width: 100%;
    min-height: calc(100vh - 132px);
    padding: 36px 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .hero.home-hero {
    max-width: 56%;
  }

  .hero h1 {
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 60px;
    color: #fff;
    text-transform: capitalize;
    line-height: 1.16
  }

  .hero p {
    font-family: Arial, Courier New, Times New Roman;
    margin-top: 20px;
    font-weight: 400;
    font-size: 20px;
    color: var(--grey-1);
    line-height: 1.2;
  }

  .hero .chat {
    margin-top: 15px;
  }

  .hero .chat a {
    display: inline-flex;
    padding: 10px 25px;
    align-items: center;
    font-size: 20px;
    border: 2px solid var(--blue-sky);
  }

  .hero .chat a:hover {
    opacity: 0.8;
  }

  .hero .chat a .icon {
    margin-right: 10px
  }

  .hero .chat a .icon img {
    width: 100%;
    height: 100%;
  }

  /* ================================
      option section
================================= */
  .options {
    background-color: var(--blue-dark);
    padding: 120px 0 40px
  }

  .options .container {
    max-width: 1250px;
  }

  .options-main {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
    /*justify-content: space-between*/
  }

  .options-main .option-box {
    /*width: calc(33.33% - 15px);*/
    width: calc(33.33% - 30px);
    margin: 20px 15px;
    background: var(--blue-dark2);
    border-radius: 8px;
    background-image: url("img/option-bg.png");
    background-repeat: no-repeat;
    background-position: bottom right;
  }

  .options-main .option-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-right: 20px;
  }

  .options-main .option-head .icon {
    background: url("img/icon-bg.png") no-repeat;
    background-size: contain;
    padding: 20px 15px 30px 30px;
    width: 100%;
  }

  .options-main .option-head .icon img {
    width: 30px;
    height: 30px;
  }

  .options-main .option-body {
    padding: 30px 20px 60px 20px;
  }

  .options-main .option-body h4 {
    font-size: 22px;
    line-height: 1.3;
    color: #fff;
  }

  .options-main .option-body p {
    font-size: 14px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    line-height: 1.5;
    color: var(--grey-1);
    margin-top: 14px;
  }

  .options .nmbr {
    font-size: 50px;
    color: var(--blue-dark2);
    text-shadow: -1px 1px 1px var(--grey-1),
      1px 2px 1px var(--grey-1),
      1px -1px 0px var(--grey-1),
      -1px -1px 0 var(--grey-1);
  }

  /* ================================
       About company sec
================================= */
  .about-com {
    background-color: #11213A;
    position: relative;
    background: url("img/map-main-xl.webp") no-repeat bottom right;
    background-size: cover;
    padding: 80px 0 80px;
  }

  .about-com .container {
    max-width: 1150px;
  }

  .about-com-main {
    display: flex;
    align-items:center;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .about-com-main>div {
    width: calc(50% - 20px);
  }

  /* --------abount-company-img---- */
  .about-com-main .about-img img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
  }

  .about-com-main .about-img {
    padding-right: 20px;
    display: flex;
    flex-direction: column;
    align-items: center
  }

  .about-com-main .experience-box {
    background: var(--blue-sky);
    display: inline-flex;
    padding: 10px 10px;
    border-radius: 8px;
    margin-top: -50px;
    position: relative;
    z-index: 3
  }

  .about-com-main .experience-box:before {
    position: absolute;
    content: '';
    background: url("img/about-bg-2.png") no-repeat;
    background-position: 100% 100%;
    height: 54px;
    width: 57px;
    bottom: 2px;
    right: -55px;
    z-index: 2
  }

  .about-com-main .experience {
    display: flex;
    align-items: center;
    position: relative;
    padding: 10px 15px;
    z-index: 9;
  }

  .about-com-main .experience:before {
    content: '';
    position: absolute;
    border: 1px dashed var(--blue-light);
    border-radius: 3px;
    width: 50%;
    height: 50%;
    transform: scale(2);
    left: 46px;
  }

  .about-com-main .experience h2 {
    margin-right: 20px;
    font-size: 45px;
  }

  .about-com-main .experience p {
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    max-width: 120px
  }

  /* ---------about-company-content---------- */
  .arrow:first-child {
    margin-right: 10px;
  }

  .arrow:last-child {
    margin-left: 10px;
  }

  .arrow img {
    width: 35px;
    height: 15px;
    vertical-align: middle;
  }

  .about-com-main .about-content p.h-para,
  .about-com-main .about-content h2 {
    margin-top: 14px;
    font-weight: 600;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
    text-align: left;
  }

  .about-com-main ul {
    list-style: none;
    margin-top: 20px
  }

  .about-com-main ul li {
      text-align:left;
    display: flex;
    align-items: center;
    margin-top: 15px;
    font-size: 20px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    color: #fff;
    line-height: 1.2;
  }

  .about-com-main ul li img {
    margin-right: 12px;
    width: 22px;
    height: 22px;
  }

  .about-com-main .about-content p {
    margin-top: 27px;
    /*text-align: justify*/
  }

  .about-com-main .about-content.project-fab p {
    margin-top: 0;
  }

  .about-com-main .about-content.project-fab .pro-fab-para {
    margin-top: 10px;
  }

  .about-com-main .about-content.project-fab .h-para {
    margin-top: 10px;
  }



  .about-com-main .about-ftr {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 30px;
  }

  .about-com-main .about-ftr .blue-btn {
    margin-right: 25px;
  }

  .about-com-main .about-ftr .blue-btn a {
    padding: 15px 25px
  }

  .call span:first-child {
    font-size: 18px;
  }

  .call span:last-child {
    font-size: 16px;
  }

  /* ================================
       SERVICES SEC
================================= */
  .services-wrapper {
    background: #0F192C;
    padding: 100px 0;
    position: relative;
  }

  .services-wrapper.courses-wrapper {
    padding: 50px 0 100px;
  }

  .services-wrapper:before {
    position: absolute;
    content: '';
    background: url("img/map-lg.png") no-repeat bottom right;
    background-size: contain;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }

  .services-wrapper .container.services-main-container {
    max-width: 1450px;
    position: relative;
    z-index: 50;
  }

  .services-wrapper .container {
    max-width: 1300px;
    position: relative;
    z-index: 50;
  }

  /* -----------SERVICES CONTENT-------- */

  .services-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 auto;
    margin-top: 20px
  }

  .services-content .service-head {
    max-width: 490px;
  }

  .services-content .service-head .h-para {
    color: #fff;
    text-align: left;
  }

  .services-content .service-para {
    width: calc(100% - 520px)
  }

  .services-content .service-para p {
    font-size: 20px;
    text-align: justify;
  }

  /* ------------SERVICES MAIN------------- */
  .services-main {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
  }

  .services-main .service-box {
    width: calc(25% - 30px);
    background: var(--blue-1);
    border-radius: 10px;
    margin: 50px 15px 0;
  }

  .services-main .service-img {
    position: relative;
  }

  .services-main .service-img-m img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .services-main .service-icon {
    position: absolute;
    bottom: -20px;
    right: 20px;
    background: var(--blue-dark2);
    width: 62px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
  }

  .services-main .service-icon img {
    width: 100%;
    height: 100%;
    padding: 10px 12px
  }

  .services-main .service-con {
    padding: 15px 20px;
  }

  .services-main .service-border {
    display: block;
    width: 65px;
    height: 6px;
    background-image: linear-gradient(to right, #015DC4, #0BDEFE);
  }

  .services-main .service-con h2,
  .services-main .service-con .ser-title{
    margin-top: 20px;
    font-size: 20px
  }

  .services-main .service-con p {
    margin-top: 8px
  }

  .service-box a {
    text-decoration: none;
  }

  .service-box a:hover {
    opacity: 0.8;
  }


  /* ================================
      WHY FAB sec
================================= */
  .why-fab-wrapper {
    background-color: var(--blue-1);
    position: relative;
  }

  .why-fab-wrapper .container {
    max-width: 1200px;
    position: relative;
    z-index: 20;
  }

  .why-fab-wrapper:before {
    position: absolute;
    content: '';
    width: 50%;
    margin-left: 50%;
    display: flex;
    justify-content: flex-end;
    text-align: right;
    height: 100%;
    background: url("img/why-fab-bg.png") no-repeat top right;
    background-size: cover;
  }

  .why-fab-wrapper:after {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background: url("img/Website-Work-Picture-Change.png") no-repeat bottom right;
    top: 0;
    background-size: calc(50% - 50px);
  }

  .why-fab-overlay {
    position: relative
  }

  .why-fab-overlay:before {
    position: absolute;
    content: '';
    width: 400px;
    height: 328px;
    background: url("img/why-fab-bg-2.png") no-repeat;
    background-size: auto;
    left: 30px
  }

  .why-fab-overlay:after {
    position: absolute;
    content: '';
    width: 50%;
    height: 100%;
    background: url("img/why-fab-bg-3.png") no-repeat bottom right;
    background-size: 370px 328px;
    bottom: 0;
  }

  .why-fab {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    flex-wrap: wrap;
    padding: 100px 0 0;
    position: relative;
  }

  .why-fab>div {
    width: calc(50% - 50px);
  }

  .why-fab .why-fab-con {
    padding-bottom: 120px;

  }

  .why-fab-wrapper .why-fab-img {
    display: none;
  }

  .why-fab h3 {
    margin-top: 20px;
  }

  .why-fab h2 {
    margin-top: 20px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  .why-fab p {
    margin-top: 15px;
    font-size: 20px;
  }

  .why-fab .why-fab-services {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 85%;
    margin-top: 50px;
  }

  .why-fab .why-fab-box {
    background: var(--blue-dark2);
    border-radius: 10px;
    width: calc(50% - 15px);
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 25px 15px;
  }

  .why-fab .why-fab-box .icon img {
    width: 100%;
    height: 100%;
  }

  .why-fab .why-fab-box h6,
  .why-fab .why-fab-box h4,
  .why-fab .why-fab-box h3 {
    margin-top: 20px;
    text-align: center;
    font-size: 20px;
  }

  /* ================================
      CONTACT SECTION
================================= */
  .contact-wrapper {
    background: url("img/contact-bg.webp") no-repeat;
    background-size: cover;
    background-position: 0 100%;
  }

  .contact-wrapper .container {
    max-width: 1250px;
  }

  .contact-wrapper .contact {
    padding: 80px 0 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .contact .contact-img {
    max-width: 50%;
    position: relative;
    z-index: 30;
    padding: 30px 0 0;
  }

  .contact .contact-img:before {
    position: absolute;
    content: '';
    background: url("img/contact-circle-bg-lg.png") no-repeat;
    background-size: contain;
    top: 0;
    width: 500px;
    height: 500px;
    z-index: -1;
  }

  .contact .contact-img:after {
    position: absolute;
    content: '';
    background: url("img/contact-circle-bg-sm.png") no-repeat;
    background-size: contain;
    background-position: top right;
    top: 50px;
    right: -250px;
    width: 250px;
    height: 250px;
    z-index: -1;
  }

  .contact .contact-img img {
    height: 100%;
    width: 100%;
    vertical-align: bottom;
    /*padding: 0 0 0 50px;*/
  }

  .contact .contact-con {
    padding: 30px 0 30px;
    position: relative;
    z-index: 45;
  }

  .contact h3 {
    margin-top: 20px;
  }


  /*.contact form {*/
  /*    margin-top: 25px;*/
  /*}*/

  /*.contact form .form-field textarea {*/
  /*    resize: none;*/
  /*    height: 150px;*/
  /*}*/

  /*.contact form .form-field input,*/
  /*.contact form .form-field textarea {*/
  /*    width: 100%;*/
  /*    background: var(--blue-1);*/
  /*    border: 1px solid #97A2B7;*/
  /*    padding: 15px 16px;*/
  /*    border-radius: 10px;*/
  /*   font-family: Arial, Courier New, Times New Roman;*/
  /*    font-weight: 400;*/
  /*    font-size: 16px*/
  /*}*/

  /*.contact form .form-field input::placeholder,*/
  /*.contact form .form-field textarea::placeholder {*/
  /*   font-family: Arial, Courier New, Times New Roman;*/
  /*    font-weight: 400;*/
  /*    font-size: 16px;*/
  /*    color: #97A2B7;*/
  /*}*/

  /*.contact form .blue-btn {*/
  /*    margin-top: 40px;*/
  /*}*/

  /*.contact form .blue-btn input[type=submit] {*/
  /*    max-width: 150px;*/
  /*    font-size: 16px;*/
  /*    padding: 13px 15px;*/
  /*    width: 100%;*/
  /*}*/

  /* ================================
      TECHNOLOGY SECTION
================================= */
  .tech-sec {
    background: var(--blue-sky);
    position: relative;
  }

  .tech-sec:before {
    position: absolute;
    content: '';
    background: url("img/technology-bg-1.png") no-repeat;
    background-position: top left;
    height: 100%;
    width: 100%;
    left: -100px;
  }

  .tech-sec:after {
    position: absolute;
    content: '';
    background: url("img/technology-bg-3.png") no-repeat;
    background-position: top right;
    height: 100%;
    width: 100%;
    right: 0;
    top: -0px;
  }

  .tech-main {
    padding: 30px 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    position: relative;
    z-index: 50;
    margin: 0 -20px;
  }

  .tech-main .tech-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 30px 20px;
    /*width: calc(12.5% - 40px);*/
  }

  .tech-main .tech-box .tech-icom {
    max-width: 100px;
    height: 100px;
    object-fit: cover;
    margin: 0 auto;
  }

  .tech-main .tech-box img {
    width: 100%;
    height: 100%;
  }

  .tech-main .tech-box h4 {
    margin-top: 15px;
    text-align: center;
    font-size: 20px
  }

  .tech-main .tech-box h3 {
    margin-top: 15px;
    text-align: center;
    font-size: 20px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    line-height: 1.3;
  }

  .tech-main .slick-dots li.slick-active button:before {
    color: #fff;
    opacity: 1;
  }

  .tech-main .slick-dots li button:before {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.6);
    opacity: 0.5;
  }

  .tech-main ul.slick-dots {
    background: none;
    height: 20px;
    top: auto;
    bottom: 20px;
    left: auto;
  }

  .tech-sec .slick-dotted.slick-slider {
    margin-bottom: 0;
  }

  /* ================================
     Our Team SECTION
================================= */
  .team-sec {
    background: var(--blue-dark);
    position: relative;
    z-index: 54;
  }

  .team-sec:before {
    position: absolute;
    content: '';
    background: url("img/team-bg.png") no-repeat top right;
    background-size: contain;
    width: 30%;
    margin-left: 70%;
    height: 100%
  }

  .team-main {
    padding: 70px 0 50px;
    position: relative;
    z-index: 55;
  }

  .team-main .team-con {
    text-align: center;
    max-width: 558px;
    margin: 0 auto
  }

  .team-main .team-con h3 {
    margin-top: 20px;
  }

  .team-main .team-con h2 {
    margin-top: 20px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  .team-main .team-box-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 40px 0 0;
  }

  .team-main .team-box {
    width: calc(33% - 100px);
    margin: 15px 50px;
  }

  .team-main .team-box .team-img {
    background: url("img/expert-bg.png") no-repeat;
    background-size: contain;
  }

  .team-main .team-box img {
    width: 100%;
    height: 100%;
    padding: 15px 15px;
    border-radius: 30px;
  }

  .team-main .team-box-con {
    padding: 0 15px;
  }

  .team-main .team-box-main h6 {
    font-weight: 400;
    color: var(--blue-sky);
  }

  .team-main .team-box-main h4 {
    margin-top: 7px
  }

  /* ================================
      TESTIMONIAL SECTION
================================= */

  .testimonial-wrapper {
    position: relative;
  }

  .testimonial-wrapper:before {
    position: absolute;
    content: '';
    background: url("img/testimonial-main-bg.png") no-repeat top right;
    background-size: 65%;
    width: 100%;
    height: 100%;
    top: -47px;
    left: 0;
    z-index: 52;
  }

  .testimonial-wrapper .container {
    position: relative;
    z-index: 53;
    max-width: 1200px;
  }

  .testimonial-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 60px;

  }

  .testimonial-main .testimonial-box {
    /* width: calc(50% - 40px); */
    margin: 0 20px;
    background: #111C31;
    border-radius: 30px;
    padding: 50px 30px 30px;
    position: relative;
  }

  .testimonial-main .testimonial-box:before {
    position: absolute;
    content: '';
    background: url("img/testimonial-bg.png") no-repeat top right;
    background-size: auto;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }

  .testimonial-main .t-box-top {
    display: flex;
    flex-wrap: wrap;
    position: relative;
    z-index: 60;
  }

  .testimonial-main .t-box-top .t-img {
    margin-right: 20px;
    border: 3px solid var(--blue-light);
    padding: 6px 7px;
    border-top-left-radius: 60px
  }

  .testimonial-main .t-box-top .t-img img {
    width: 100%;
    height: 100%;
    border-top-left-radius: 60px
  }

  .testimonial-main .t-box-top .t-con {
    margin-top: 20px;
  }

  .testimonial-main .t-box-top .star-icons {
    display: flex;
  }

  .testimonial-main .t-box-top .star-icons img {
    width: 25px;
    height: 24px;
    margin-right: 6px
  }

  .testimonial-main .t-box-top h5 {
    margin-top: 17px;
  }

  .testimonial-main .testimonial-des {
    position: relative;
    z-index: 60;
    margin-top: 20px;
    height: 120px;
    overflow-y: auto;
    padding-right: 5px;
  }

  .testimonial-main .testimonial-des p {
    text-align: justify;
    line-height: 1.39;
    font-size: 14px;
  }

  .testimonial-main .testimonial-des::-webkit-scrollbar {
    width: 10px;
    height: 14px;
  }

  .testimonial-main .testimonial-des::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 8px;
  }

  .testimonial-main .testimonial-des::-webkit-scrollbar-thumb {
    background: var(--blue-sky);
    border-radius: 8px;
    border: 2px solid #fff;
  }

  .testimonial-main .slick-dots li.slick-active button:before {
    color: #fff;
    opacity: 1;
  }

  .testimonial-main .slick-dots li button:before {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.6);
    opacity: 0.5;
  }

  .testimonial-main ul.slick-dots {
    background: none;
    height: 20px;
    top: auto;
    bottom: -70px;
    left: auto;
  }

  /* ================================
         BANNER SECTION
================================= */
  .banner-sec {
    background: var(--blue-dark);
    padding: 50px 0;
    position: relative;
    z-index: 60;
  }

  .banner-sec .banner-main {
    background: url("img/banner-bg.png");
    background-size: cover;
    border-top-right-radius: 15px;
    border-top-left-radius: 15px;
    padding: 25px 15px;
  }

  .banner-sec .banner-box {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .banner-sec .banner-con {
    display: flex;
  }

  .banner-sec .banner-con h6 {
    font-size: 17px;
  }

  .banner-sec .banner-con h5 {
    margin-top: 5px;
    max-width: 560px
  }

  .banner-sec .banner-con .icon {
    margin-right: 15px;
  }

  .banner-sec .banner-con .icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  .banner-sec .banner-btn a {
    background: #fff;
    color: var(--blue-sky);
    font-size: 16px;
    padding: 13px 18px;
    border: 2px solid #fff;
  }

  .banner-sec .banner-btn a:hover {
    background: transparent;
    color: #fff;
  }

  /* ================================
        FOOTER SECTION  
================================= */
  footer {
    background: var(--blue-1);
  }

  footer .container {
    max-width: 1300px;
  }

  .ftr-main {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 100px 0 50px
  }

  .ftr-main .ftr-col p span {
    text-transform: uppercase;
  }

  .ftr-main .ftr-col .social-icons {
    margin-top: 20px;
    display: flex;
    align-items: center;
  }

  .ftr-main .ftr-col .social-icons a {
    border: 1px solid var(--blue-sky);
    display: inline-block;
    padding: 10px 10px;
    margin-right: 10px;
    border-radius: 6px;
    max-width: 40px;
    width: 100%;
    display: flex;
    justify-content: center;
  }

  .ftr-main .ftr-col .social-icons a img {
    width: 16px;
    height: 16px;
    vertical-align: center;
    object-fit: contain;
  }

  .ftr-main .ftr-col:nth-of-type(1) {
    width: calc(40% - 20px);
    margin: 15px 10px;
  }

  .ftr-main .ftr-col:nth-of-type(2) {
    /*     width: calc(30% - 20px); */
    width: max-content;
    margin: 15px 10px;
  }

  .ftr-main .ftr-col:nth-of-type(3) {
    /* width: calc(30% - 20px); */
    width: max-content;
    margin: 15px 10px;
  }

  .ftr-main .ftr-col:nth-of-type(2) a {
    color: var(--grey-1);
    text-decoration: none;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    line-height: 1.2;
    display: flex;
    margin-bottom: 20px
  }

  .ftr-main .ftr-col:nth-of-type(2) a:first-child {
    max-width: 250px;
  }

  .ftr-main .ftr-col:nth-of-type(2) a:last-child {
    margin-bottom: 0;
  }

  .ftr-main .ftr-col:nth-of-type(2) a .icon {
    margin-right: 10px;
    cursor: pointer;
  }

  .ftr-main .ftr-col:nth-of-type(2) a .icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  .ftr-main .ftr-col .email-box {
    display: flex;
    align-items: center;
    background: var(--blue-dark);
    padding: 0 12px 0 0;
    border-radius: 6px
  }

  .ftr-main .ftr-col .email-box input {
    padding: 13px 0 13px 12px;
    background: var(--blue-dark);
    border: none;
    font-size: 16px;
    color: #fff;
    width: 100%;
  }

  .ftr-main .ftr-col .email-box input::placeholder {
    color: var(--grey-1);
  }

  .ftr-main .ftr-col .email-box input:focus {
    outline: none;
  }

  .ftr-main .ftr-col .email-box button {
    border: none;
    background: transparent;
  }

  .ftr-main .ftr-col .email-box img {
    width: 20px;
    height: 20px;
    cursor: pointer;
    transition: all 0.3s;
  }

  .ftr-main .ftr-col .email-box img:hover {
    opacity: 0.8;
  }

  .ftr-main .ftr-col .ftr-call {
    margin-top: 24px
  }

  .ftr-main .ftr-col .ftr-call .icon {
    margin-right: 10px;
    width: 40px;
    height: 40px;
  }

  .ftr-main .ftr-col a:hover {
    opacity: 0.8;
  }

  .copyright p {
    text-align: center;
  }

  .ftr-main {
    border-bottom: 1px solid #707070
  }

  .copyright {
    padding: 20px 0;
  }

  /* -------------------------------
  About company | About Page 
-------------------------------- */
  .about-com .about-p-img {
    padding-right: 20%
  }

  .about-com .about-p-img2 {
    padding-left: 20%;
    margin-top: -35%;
  }

  .about-com-main .about-img img {
    border-radius: 10px
  }
  .about-com-main .about-img-up {
    margin-top:27px;
  }

  .owner-name-main {
    display: flex;
    align-items: center;
    margin-top: 35px;
  }

  .owner-name-main .owner-img {
    margin-right: 15px
  }

  .owner-name-main .owner-img img {
    border-radius: 50px;
    width: 70px;
    height: 70px;
    object-fit: cover;
  }

  .owner-name-main h4 {
    font-size: 35px;
    font-weight: 400;
    color: #70707070;
    font-family: Segoe Script;
  }

  .owner-name-main h6 {
    font-size: 18px;
    margin-top: 7px;
  }

  .about-com.about-p-com {
    background-image: none;
    background-color: #11213A;
  }

  /* ================================
  brand section | About page
================================= */
  .brand-sec {
    background: #11213A;
    padding: 20px 0 60px
  }

  .brand-main {
    background: #0C2E5B;
    border-radius: 10px;
    padding: 30px 35px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .brand-main .brand-text p {
    font-size: 23px;
  }

  .brand-main .brand-text {
    max-width: 360px;
  }

  .brand-main .brands-box {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: calc(100% - 500px);
  }

  .brand-main .brands-box .brand-img {
    margin-right: 20px;
  }

  .brand-main .brands-box .brand-img:last-child {
    margin-right: 0;
  }

  .brand-main .brands-box .brand-img img {
    width: 80px;
    height: 80px;
    object-fit: contain;
    vertical-align: middle;
  }

  /* ================================
 testimonial section | About page
================================= */
  .hero-wrapper.about-hero-wrapper {
    background: url("img/Banner-picture-about.png") no-repeat;
    background-position: center;
    background-size: cover;
  }

  .testimonial-wrapper.about-p-testimonial {
    background-color: var(--blue-dark2);
    padding: 60px 0 45px;
  }

  .about-p-testimonial .container {
    max-width: 1300px;
  }

  .about-p-testimonial .why-fab .why-fab-box {
    background: var(--blue-dark);
  }

  .about-p-testimonial.testimonial-wrapper:before {
    display: none;
  }

  .about-p-testimonial .why-fab-about {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
  }

  .about-p-testimonial .testimonial-main {
    height: 750px;
    overflow-y: auto;
    padding-right: 16px;
    margin: 0 -20px
  }

  .about-p-testimonial .testimonial-main::-webkit-scrollbar {
    width: 15px;
    height: 14px;
  }

  .about-p-testimonial .testimonial-main::-webkit-scrollbar-track {
    background: #fff;
    border-radius: 8px;
  }

  .about-p-testimonial .testimonial-main::-webkit-scrollbar-thumb {
    background: var(--blue-sky);
    border-radius: 8px;
    border: 3px solid #fff;
  }

  .about-p-testimonial .why-fab-about>div {
    width: calc(50% - 45px);
  }

  .about-p-testimonial .testimonial-main {
    display: block;
  }

  .about-p-testimonial .testimonial-box {
    /* width: calc(100% - 0px); */
    margin-bottom: 40px;
  }

  .about-p-testimonial .testimonial-box:last-child {
    margin-bottom: 0;
  }

  .about-p-testimonial .why-fab>div {
    width: calc(100% - 0px);
  }

  .about-p-testimonial .why-fab .why-fab-con {
    padding-bottom: 60px;
  }

  .about-p-testimonial .why-fab {
    padding: 0
  }

  .about-p-testimonial .testimonial-main {
    margin-top: 0;
  }

  .about-p-testimonial .why-fab-services {
    margin-top: 30px
  }

  /* ================================
 STATS section | About page
================================= */
  .tech-sec.stats-sec {
    background-image: linear-gradient(to left, #015FC9 70%, #0BDEFE)
  }

  .stats-sec .tech-main {
    justify-content: space-around;
    padding: 20px 0;
  }

  .stats-sec .stats-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px 15px;
  }

  .stats-sec .stats-box h2 {
    color: var(--blue-dark);
    position: relative;
    padding-top: 10px;
    text-align: center;
  }

  .stats-sec .stats-box h2:before {
    position: absolute;
    content: '+';
    color: var(--blue-light);
    font-weight: 600;
    font-size: 30px;
    right: -14px;
    top: -5px;
  }

  .stats-sec .stats-box h6 {
    text-transform: uppercase;
    font-size: 18px;
    text-align: center;
  }

  .stats-sec .stats-box .stats-icon {
    width: 90px;
    height: 90px;
  }

  .stats-sec .stats-box .stats-icon img {
    width: 100%;
    height: 1005
  }

  /* ================================
 ACCARDION section | About page
================================= */

.faq-sec a {
    color: var(--blue-sky);
    text-decoration: none;
}

.faq-sec a:hover {
    text-decoration: underline;
}
  .faq-sec {
    background: var(--blue-dark2);
    padding: 70px 0;
    position: relative;
  }

  .faq-sec:before {
    position: absolute;
    content: '';
    background-image: url(img/testimonial-main-bg.png);
    background-repeat: no-repeat;
    background-position: top right;
    background-size: 65%;
    width: 100%;
    height: 100%;
    top: -47px;
    left: 0;
    z-index: 52;
  }

  .faq-sec .container {
    position: relative;
    z-index: 56;
  }

  .faq-main {
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
  }

  .faq-sec h3 {
    margin-top: 25px;
  }

  .faq-sec h2,
  .faq-sec h4,
  .faq-sec h5 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
    margin-top: 25px;
  }


  .faq-sec .acc-m-sec {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    justify-content: space-between;
    margin-top: 50px;
  }

  .faq-sec .accordion-list {
    width: 100%;
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
  }

  .accordion-list li {
    border: 1px solid var(--blue-sky);
    border-radius: 15px;
    padding: 17px 20px;
    margin-top: 15px;
    width: calc(50% - 20px);
  }

  ul.accordion-list li .acc-head {
    min-height: 60px;
    display: flex;
    align-items: center;
    padding: 5px 0;
    cursor: pointer;
    position: relative
  }

  ul.accordion-list li .acc-head h6 {
    width: calc(100% - 55px);
  }


  ul.accordion-list li .acc-head .acc-icon {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translatey(-50%);
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center
  }

  .active .acc-head .acc-icon img {
    transform: rotate(45deg);

  }

  .acc-head .acc-icon img {
    line-height: 1;
    font-size: 16px;
    width: 100%;
    height: 100%;
  }

  .accordion-list p {
    /*margin-top: 5px;*/
    padding: 10px 0;
  }


  /* ================================
 Home section |Services page
================================= */
  .services-p .hero-wrapper {
    background: url(img/Banner-picture-our-services.png) no-repeat;
    background-position: center;
    background-size: cover;
  }

  .services-p .hero-wrapper .hero-icon {
    margin-bottom: 20px;
  }

  .services-p .hero h1,
  .about-hero-wrapper .hero h1 {
    font-size: 45px;
  }

  .services-p .hero p,
  .about-hero-wrapper .hero p {
    font-size: 18px;
  }

  /* ================================
Expert section |Services page
================================= */
  .services-p .team-sec .container {
    max-width: 1150px
  }

  .services-p .team-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 80px 0;
  }

  .services-p .team-main .expert-contact {
    max-width: 200px;
    position: relative;
  }

  .services-p .team-main .contact-detail {
    position: absolute;
    background: var(--blue-sky);
    padding: 5px 16px;
    text-align: center;
    border-radius: 6px;
    top: 17%;
    left: 12%;
  }

  /* -------contact-detail-polygon--- */
  .contact-detail {
    position: relative;
    text-decoration: none;
  }

  .contact-detail:before {
    position: absolute;
    content: '';
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 10px solid var(--blue-sky);
    bottom: -10px;
  }

  .services-p .team-main .contact-detail h6 {
    font-size: 16px;
  }

  .services-p .team-main .expert-contact img {
    width: 100%;
  }

  .services-p .team-main .expert-des {
    width: calc(100% - 300px);
  }

  .services-p .team-main .expert-des h3 {
    font-size: 30px;
  }

  .services-p .team-main .expert-des h5 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 30px;
    line-height: 1.2;
  }

  .services-p .team-main .expert-des p {
    margin-top: 30px;
  }

  .services-p .team-main .expert-des .blue-btn {
    display: inline-flex;
    margin-top: 25px;
  }

  .services-p .team-main .expert-des .blue-btn a {
    padding: 17px 20px
  }

  /* ================================
HERO SECTION |CONTACT-US PAGE
================================= */
  .contact-p .hero-wrapper {
    background: url("img/Banner-picture-Contact-Us.webp") no-repeat;
    background-position: center;
    background-size: cover;
  }

  .contact-p .hero-wrapper .hero-icon {
    margin-bottom: 20px;
  }

  .contact-p .hero-wrapper .hero-icon img {
    width: 72px;
    height: 72px;
  }

  .contact-p .hero h1 {
    font-size: 45px;
  }

  /* ================================
CONTACT-US SECTION |CONTACT-US PAGE
================================= */
  .contact-p .contact-us-sec {
    background: var(--blue-dark);
    padding: 100px 0
  }

  .contact-p .contact-us-sec .container {
    max-width: 1200px
  }

  .contact-p .contact-us-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .contact-p .contact-us-main>div {
    width: calc(50% - 40px)
  }

  .contact-p .contact-us-sec h3 {
    margin-top: 25px;
  }

  .contact-p .contact-us-sec h2 {
    margin-top: 25px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }


  .contact-p .contact-us-con {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 25px;
  }

  .contact-p .contact-us-con a:first-child {
    width: calc(43% - 15px)
  }

  .contact-p .contact-us-con a:last-child {
    width: calc(57% - 15px);
    display: flex;
    align-items: center;
    color: #fff;
    text-decoration: none;
    line-height: 1.2
  }

  .contact-p .contact-us-con a .icon {
    margin-right: 10px;

  }

  .contact-p .contact-us-con a .icon img {
    width: 45px;
    height: 45px
  }

  .contact-p .contact-us-con a {
    transition: all 0.3s;
  }

  .contact-p .contact-us-con a:hover {
    opacity: 0.8;
  }

  /* -----------FORM------------ */
  .contact-p form .form-field {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .contact-p form .input-field {
    width: calc(50% - 10px);
    margin-top: 24px;
  }

  .contact-p form .msg-field {
    margin-top: 24px;
    width: 100%;
  }

  .contact-p form .msg-field textarea {
    resize: none;
    height: 140px;
  }

  .contact-p form .input-field input,
  .contact-p form .input-field select,
  .contact-p form .msg-field textarea {
    width: 100%;
    padding: 14px 15px;
    background: var(--blue-1);
    border: 1px solid var(--blue-light);
    border-radius: 8px;
    color: #97A2B7;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
  }


  .contact-p form .input-field input::placeholder,
  .contact-p form .msg-field textarea::placeholder {
    color: #97A2B7;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
  }

  .contact-p form .input-field input:focus,
  .contact-p form .msg-field textarea:focus {
    outline: none;
    border: 1px solid #fff;
  }

  .contact-p form .submit-btn {
    margin-top: 27px
  }

  .contact-p form .submit-btn button {
    background: var(--blue-sky);
    padding: 13px 15px;
    border-radius: 8px;
    color: #fff;
    display: flex;
    align-items: center;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s;
    border: none;
  }

  .contact-p form .submit-btn span:last-child {
    margin-left: 15px;
  }

  .contact-p form .submit-btn span:last-child img {
    width: 23px;
    height: 23px;
    vertical-align: middle;
  }

  .contact-p form .submit-btn button:hover {
    opacity: 0.8
  }

  /* ---------upload doc------ */

  .attach-doc>div {
    width: 100%;
  }

  .attach-doc [type="file"] {
    height: 0;
    overflow: hidden;
    width: 0;
  }

  .attach-doc [type="file"]+label {
    position: relative;
    display: inline-block;
    background: var(--blue-1);
    border: 1px solid vaR(--blue-light);
    border-radius: 8px;
    padding: 14px 15px;
    vertical-align: middle;
    width: 100%;
  }

  .attach-doc label img {
    margin-left: 10px
  }

  /* ===================================
EXPERT BANNER SECTION |CONTACT-US PAGE
==================================== */
  .expert-banner {
    background: var(--blue-dark);
    padding: 0 0 70px
  }

  .expert-banner .expert-ban-main {
    background: #1A2B4A;
    border-radius: 20px;
    padding: 14px 15px;
  }

  .expert-banner .expert-ban {
    background: url("img/expert-banner.png");
    background-size: cover;
    border-radius: 20px;
    padding: 50px 40px;
    border: 1px solid var(--blue-light);
  }

  .expert-banner .expert-ban .expert-con {
    max-width: 490px;
    margin-left: auto;
  }

  .expert-banner .expert-ban .expert-con h4 {
    font-size: 35px;
  }

  /* =====================================
EXPERT/ TEAM SECTION |CONTACT-US PAGE
======================================= */
  .contact-p .team-sec {
    background: #17253E;
  }

  /* =====================================
  MAP SECTION |CONTACT-US PAGE
======================================= */
  .google-map-sec iframe {
    width: 100%;
    border: 0;
  }

  /* ================================
HERO SECTION |GET HIRED PAGE
================================= */
  .contact-p.get-hired .hero-wrapper {
    background: url("img/hero-get-hired.png") no-repeat;
    background-position: center;
    background-size: cover;
  }

  .contact-p.get-hired .hero-wrapper .hero {
    min-height: 100%;
    padding: 100px 0;

  }

  .contact-p.get-hired .hero-wrapper .hero-con {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
  }

  .contact-p.get-hired .hero-wrapper .hero-icon {
    margin: 0 20px 0 0;
  }

  .contact-p.get-hired .hero-wrapper .hero-icon img {
    width: 72px;
    height: 72px;
  }


  /* ================================
contact SECTION |GET HIRED PAGE
================================= */
  .contact-p.get-hired h5 {
    font-size: 22px;
    margin-top: 10px;
    color: var(--blue-sky);
  }

  /*.contact-p.get-hired .contact-us-sec .container {*/
  /*    max-width: 1000px;*/
  /*}*/

  .contact-p.get-hired .contact-us-main>div {
    width: calc(100% - 0px);
  }

  .contact-p.get-hired form .input-field {
    width: calc(50% - 20px);
  }

  .contact-p.get-hired form .input-field.full-field {
    width: calc(100% - 0px);
  }

  .contact-p.get-hired form .form-sec {
    margin-top: 30px
  }

  .contact-p.get-hired form .form-sec h5 {
    margin-bottom: 10px;
    font-size: 22px;
    font-weight: 600;
    color: #fff;
  }

  .contact-p.get-hired form .input-field,
  .contact-p.get-hired form .msg-field {
    margin: 0 0 23px;
  }

  .contact-p.get-hired form .submit-btn {
    display: flex;
    justify-content: flex-end
  }

  /*.get-hired h2,*/
  /*.get-hired .m-head {*/
  /*    text-align: center*/
  /*}*/

  .get-hired form {
    margin-top: 35px;
  }

  .contact-p form label {
    color: #97A2B7;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
  }

  .contact-p form .form-field.apply-for-field label {
    display: inline;
    font-size: 20px;
  }

  .contact-p form .form-field.apply-for-field {
    justify-content: flex-start;
  }

  .contact-p form .form-field .check-field {
    margin-right: 20px;
    margin: 7px 20px 7px 0
  }

  .contact-p form .form-field .check-field input {
    margin-right: 4px;
  }

  .contact-p form .form-field label {
    display: block;
    margin: 0 0 5px 3px;
    font-size: 16px;
  }

  .contact-p.get-hired form .address-field .input-field {
    width: calc(33.33% - 15px)
  }

  .contact-p.get-hired form #av-time {
    display: none;
  }

  /* ================================
HERO SECTION | SOFTWARE DEV PAGE
================================= */
  .software-service .hero-con {
    display: flex;
    align-items: center;
  }

  .software-service .hero {
    max-width: 630px;
  }

  .services-p.software-service .hero-wrapper .hero-icon {
    margin: 0 15px 0 0
  }

  .services-p.software-service .hero h1 {
    margin-top: 8px;
    font-size: 43px;
  }

  .services-p.software-service .hero h6 {
    font-size: 16px;
    font-weight: 400;
  }

  .services-p.software-service .hero-wrapper {
    background: url("img/Banner-picture-Software-Development.webp") no-repeat;
    background-position: right 99%;
    background-size: cover;
  }

  /* ================================
ABOUT-COM SECTION | SOFTWARE DEV PAGE
================================= */
  .software-service .about-com.about-p-com {
    background-color: var(--blue-dark);
    padding: 80px 0 0;
  }

  .software-service .about-com .container {
    max-width: 1250px
  }

  .software-service .about-p-img2 img {
    width: 220px;
    height: 220px;
  }

  .software-service .about-com .about-p-img2 {
    margin-left: auto;
    padding: 0;
    margin-top: -36%;
  }

  .software-service .about-com .about-p-img {
    padding-right: 9%;
  }

  .software-service .about-com-main .about-img {
    padding: 0;
    width: calc(45% - 30px);
  }

  .software-service .about-com-main .about-content {
    width: calc(55% - 20px);
  }

  .software-service .about-com-main .about-content h2 {
    text-align: left;
    margin-top: 20px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  .software-service .about-com-main .about-content p a {
    color: var(--blue-light);
  }

  .software-service .about-com-main .about-content p a:hover {
    text-decoration: none;
  }

  /* ==================================
Software options | SOFTWARE DEV PAGE
==================================== */
  .software-service .options {
    padding: 100px 0;
  }

  .software-service .options-main .option-body {
    padding: 0;
    display: flex;
    align-items: center;
  }

  .software-service .options-main .option-box {
    padding: 20px 20px
  }

  .software-service .option-body .icon {
    margin-right: 15px;
    background: #17253E;
    padding: 10px 12px;
    border-radius: 8px;
  }

  .software-service .option-body .icon img {
    width: 33px;
    height: 33px;
    vertical-align: middle;
  }

  .software-service .options-main .option-box p {
    margin-top: 25px;
    font-size: 14px;
    line-height: 1.5;
  }

  .software-service .options-main .option-box p a {
    color: var(--blue-light);
    text-decoration: none;
  }

  .software-service .options-main .option-box p a:hover {
    text-decoration: underline;
  }

  .software-service .option-box ul {
    margin-top: 35px;
  }

  .software-service .option-box ul li {
    display: flex;
    align-items: center;
    margin-top: 12px;
    font-size: 14px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    color: #fff;
    line-height: 1.2;
  }

  .software-service .option-box ul li img {
    margin-right: 12px;
    width: 22px;
    height: 22px;
  }

  /* ================================
HERO SECTION | WEB DEV PAGE
================================= */
  .software-service.web-service .hero-wrapper {
    background: url("img/Banner-picture-Website-Development.webp") no-repeat;
    background-position: right 99%;
    background-size: cover;
  }

  /* ================================
HERO SECTION | APP DEV PAGE
================================= */
  .software-service.app-service .hero-wrapper {
    background: url("img/Banner-picture-Application-Development.webp") no-repeat;
    background-position: right 99%;
    background-size: cover;
  }

  /* ================================
HERO SECTION | UI/UX Service PAGE
================================= */
  .software-service.ui-service .hero-wrapper {
    background: url("img/Banner-picture-UI-Design.webp") no-repeat;
    background-position: right 99%;
    background-size: cover;
  }

  /* ================================
HERO SECTION | hardware Service PAGE
================================= */
  .software-service.hardware-service .hero-wrapper {
    background: url("img/hero-hardware.png") no-repeat;
    background-position: right 99%;
    background-size: cover;
  }

  /* ================================
HERO SECTION | WEB DEV PAGE
================================= */
  .software-service.AI-service .hero-wrapper {
    background: url("img/hero-AI.png") no-repeat;
    background-position: top right;
    background-size: cover;
  }

  /* =============================================
PROCEDURE GRAPH SECTION | SOFTWARE Service PAGE
=============================================== */
  .procedure-sec {
    background: var(--blue-dark2);
    padding: 70px 0 160px;
    position: relative;
  }

  .procedure-sec:before {
    position: absolute;
    content: '';
    background: url("img/procedure-bg.png") no-repeat;
    background-size: 43%;
    background-position: 0% 14%;
    width: 100%;
    height: 100%;
  }

  .procedure-sec:after {
    position: absolute;
    content: '';
    background: url(img/team-bg.png) no-repeat bottom right;
    background-size: 20%;
    width: 100%;
    margin-left: 0;
    height: 100%;
    top: 0;
    right: 0;
  }

  .procedure-sec .container {
    position: relative;
    z-index: 90;
  }

  .procedure-sec .proced-con {
    margin: 0 auto;
    text-align: center
  }

  .procedure-sec .proced-con h3 {
    margin-top: 25px
  }

  .procedure-sec .graph {
    max-width: 740px;
    margin: 180px auto 0;
    position: relative;
  }

  .procedure-sec .graph .graph-img img {
    width: 100%;
  }

  .procedure-sec .graph .phase h5 {
    color: var(--blue-light);
    font-size: 22px;
    margin: 0 0 5px 10px;
    font-weight: 400;
  }

  /* -------phase-boxes- */
  .procedure-sec .graph .phase-content {
    width: 290px;
    padding: 50px 25px 30px 35px;
    background-image: linear-gradient(to right, #00C5FD, #0065FF);
    border-radius: 8px;
    position: relative;
  }

  .procedure-sec .graph .phase-content:before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    background-image: url(img/option-bg.png);
    background-repeat: no-repeat;
    background-position: bottom right;
    bottom: 0;
    right: 0;
  }

  /* ----phase-overlay- */
  .phase-overlay-img {
    position: absolute;
    top: -32px;
    left: 40%;
    background: linear-gradient(#073B6B, #027AD7);
    border-radius: 50px;
    padding: 15px 18px;
  }

  .phase-overlay-img img {
    width: 30px;
    height: 33px;
  }

  .procedure-sec .graph .phase ul {
    position: relative;
  }

  .procedure-sec .graph .phase li {
    margin: 12px 0;
    font-size: 16px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    color: #fff;
    line-height: 1.2;
    list-style-type: square;
  }

  .procedure-sec .graph .phase {
    position: absolute;
  }

  .procedure-sec .graph .phase-1 {
    top: -100px;
    right: 55px
  }

  .procedure-sec .graph .phase-2 {
    top: 30px;
    left: 4px;
  }

  .procedure-sec .graph .phase-3 {
    top: 300px;
    left: 200px;
  }

  .procedure-sec .graph .phase span {
    color: var(--blue-1);
    font-weight: 600;
  }

  .procedure-sec .graph .phase-4 {
    bottom: -35px;
    left: 90px
  }

  /* =============================================
    PROCEDURE GRAPH SECTION | WEB Service PAGE
  =============================================== */
  .procedure-sec.web-pro {
    padding: 70px 0 90px;
  }

  .procedure-sec.web-pro .graph {
    margin-top: 80px;
    max-width: 670px;
  }

  .procedure-sec:before {
    position: absolute;
    content: '';
    background: url(img/procedure-bg.png) no-repeat;
    background-size: 43%;
    background-position: 0% 4%;
  }

  .procedure-sec .graph .web-phase-1 {
    top: 90px;
    left: 0px;
  }

  .procedure-sec .graph .phase-1-text {
    top: 157px;
    right: 80px;
  }

  .procedure-sec .graph .web-phase-2 {
    top: 400px;
    right: 0;
  }

  .procedure-sec .graph .phase-2-text {
    top: 485px;
    left: 70px;
  }

  .procedure-sec .graph .web-phase-3 {
    bottom: 480px;
    left: 0;
  }

  .procedure-sec .graph .phase-3-text {
    bottom: 555px;
    right: 80px;
  }

  .procedure-sec .graph .web-phase-4 {
    bottom: 125px;
    right: 0;
  }

  .procedure-sec .graph .phase-4-text {
    bottom: 202px;
    left: 70px;
  }

  .procedure-sec .graph .phase-text {
    position: absolute;
    color: var(--blue-light);
    font-size: 22px;
    margin: 0 0 5px 10px;
    font-weight: 400;
  }

  .procedure-sec .mbl-phase {
    display: none;
  }

  .procedure-sec .graph h5.end {
    color: #fff;
    text-align: center;
    width: 100%;
    margin: 30px 0 0;
  }

  /* =============================================
PROCEDURE GRAPH SECTION | APP Service PAGE
=============================================== */
  .procedure-sec .graph h6 {
    color: #FFCF35;
    font-weight: 600;
    text-align: center;
    margin-bottom: 20px;
  }

  .procedure-sec .graph .app-phase-1 {
    top: 90px;
    left: 0px;
  }

  .procedure-sec .graph .app-1-text {
    top: 161px;
    right: 80px;
  }

  .procedure-sec .graph .app-phase-2 {
    top: 420px;
    right: 0;
  }

  .procedure-sec .graph .app-2-text {
    top: 495px;
    left: 50px;
  }

  .procedure-sec .graph .app-phase-3 {
    top: 780px;
    left: 0;
  }

  .procedure-sec .graph .app-3-text {
    top: 864px;
    right: 80px;
  }

  .procedure-sec .graph .app-phase-3b {
    bottom: 640px;
    right: 0;
  }

  .procedure-sec .graph .app-phase-4 {
    bottom: 265px;
    left: 0;
  }

  .procedure-sec .graph .app-4-text {
    bottom: 303px;
    right: 70px;
  }

  /* ================================
      HERO || BLOG
================================= */
  .blog-p .hero-wrapper {
    background: url("img/Banner-picture-Our-Blogs.webp") no-repeat;
    background-position: top right;
    background-size: cover;
  }

  /* ================================
      blog contetn || BLOG
================================= */
  .blog-sec {
    background: var(--blue-dark2);
    padding: 70px 0;
  }

  .blog-sec .container {
    max-width: 1150px;
  }

  .blog-sec h6 {
    text-align: center;
    margin-bottom: 15px
  }

  .blog-sec .blog-main h2,
  .blog-sec .blog-main p {
    text-align: center
  }

  .blog-sec .blog-main h2 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
    /*margin-top:10px;*/
  }

  .blog-sec .blog-con {
    margin-bottom: 20px;
  }

  .blog-sec .blog-con:last-child {
    margin-bottom: 0;
  }

  .blog-sec .blog-con-main {
    margin-top: 70px;
  }

  .blog-sec p {
    margin-top: 10px;
    font-size: 18px;
    text-align: justify
  }

  .blog-sec .blog-con-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .blog-sec .blog-con-main>div {
    width: calc(50% - 20px);
  }

  .blog-sec .blog-con-right .blog-con {
    background: var(--blue-sky);
    padding: 20px 25px;
    border-radius: 8px;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .blog-sec .blog-con-main h2 {
    text-align: left;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  .blog-sec .blog-con-main p {
    text-align: left;
  }

  .blog-sec .blog-con-right .blog-con h3 {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    line-height: 1.2;
    font-size: 34px;
  }

  .blog-sec .blog-con-right .blog-con p {
    font-size: 16px;
    color: #fff
  }

  /* ================================
    core values || BLOG
================================= */
  .blog-p .options-main .option-box {
    margin: 20px 0;
    width: calc(25% - 15px);
    border: 2px solid var(--blue-sky)
  }

  .blog-p .options .container {
    max-width: 1300px
  }

  .blog-p .options .options-con {
    text-align: center;
    max-width: 600px;
    margin: 0 auto
  }

  .blog-p .options .options-con .h-para {
    margin-top: 20px;
    font-size: 35px;
  }

  .options-main .option-body h3 {
    font-size: 23px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    line-height: 1.3;
    color: #fff;
  }

  .blog-p .options {
    padding: 70px 0
  }

  .blog-p .options .options-main {
    margin-top: 40px;
    justify-content:space-between;
  }

  /* ================================
    QUALITY POLICY || BLOG
================================= */
  .blog-p .quality-policy {
    background: var(--blue-1);
    position: relative;
    z-index: 90;
    padding: 100px 0
  }

  .blog-p .quality-policy .h-para {
    text-align: center;
  }

  .blog-p .quality-policy-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 30px
  }

  .blog-p .quality-policy-main .quality-box {
    width: calc(50% - 40px);
    margin: 30px 0
  }

  .blog-p .quality-box .icon {
    background: #fff;
    width: 60px;
    height: 60px;
    padding: 12px 12px;
    border-radius: 50px
  }

  .blog-p .quality-box .icon img {
    width: 100%;
    height: 100%;
  }

  .blog-p .quality-box p {
    font-size: 18px;
    margin-top: 20px;
    text-align: justify;
  }

  /* ================================
              LOGIN
================================= */
  .login {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: linear-gradient(to right, #00C5FD, #0065FF);
    padding: 0 15px;
  }

  .login-form {
    background: var(--blue-dark);
    border-radius: 8px;
    max-width: 450px;
    width: 100%;
    padding: 60px 30px 70px;
  }

  .login-form h1 {
    color: #fff;
    font-weight: 600;
    font-size: 40px;
    text-align: center
  }

  .login-form form {
    margin-top: 30px;
  }

  .login-form form .form-field {
    display: flex;
    flex-direction: column;
  }

  .login-form form .form-field label {
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 18px;
  }

  .login-form form .form-field {
    margin: 20px 0
  }

  .login-form form .form-field input {
    margin-top: 7px;
    font-family: Arial, Courier New, Times New Roman, Helvetica, Comic Sans, Impact, Palantino, Georgia, Trebuchet, Verdana;
    font-weight: 400;
    font-size: 16px;
    padding: 11px 12px;
    width: 100%;
    border-radius: 4px;
    border: none;
  }

  .login-form form .form-field input::placeholder {
    font-family: Arial, Courier New, Times New Roman, Helvetica, Comic Sans, Impact, Palantino, Georgia, Trebuchet, Verdana;
    font-weight: 400;
    font-size: 16px;
  }

  .login-form form .form-field input:focus {
    outline: none;
  }

  .login-form form input[type="submit"] {
    background-image: linear-gradient(to right, #00C5FD, #0065FF);
    border: none;
    border-radius: 6px;
    font-size: 18px;
    color: #fff;
    width: 100%;
    display: block;
    margin: 30px auto 0;
    cursor: pointer;
    transition: all 0.3s;
    padding: 12px 12px;
  }

  .login-form form input[type="submit"]:hover {
    background-image: linear-gradient(to left, #00C5FD, #0065FF);
  }

  /* ================================
      Alert Popup
================================= */
  .popup {
    position: absolute;
    top: 0;
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    background: rgba(0, 0, 0, 0.4);
    z-index: 200;
  }

  .popup-main {
    max-width: 450px;
  }

  .popup-main .popup-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--blue-sky);
    /*        padding: 30px 30px; */
    padding: 10px 15px;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
  }

  .popup-main .popup-head .icon img {
    width: 45px;
    height: 45px;
    margin-right: 10px;
  }

  .popup-main .popup-head h4 {
    color: var(--blue-dark);
    font-size: px;
    color: #fff;
    line-height: 1
  }

  .popup-main .alert-heading {
    display: flex;
    justify-content: center;
    align-items: center
  }

  .popup-main .popup-close {
    background: #ee404c;
    border-radius: 50px;
    width: 32px;
    height: 32px;
    padding: 8px 8px;
    margin-left: auto;
    cursor: pointer;
    transition: all 0.3s;
  }

  .popup-main .popup-close:hover {
    opacity: 0.8
  }

  .popup-main .popup-close img {
    width: 100%;
    height: 100%;

  }

  .popup-main .popup-body {
    padding: 35px 25px 35px;
    border: 3px solid var(--blue-sky);
    border-bottom-left-radius: 9px;
    border-bottom-right-radius: 9px;
    background: rgba(255, 255, 255, 1);
  }

  .popup-main .popup-body p {
    font-size: 20px;
    text-align: center;
    color: var(--blue-dark2);
    /*     font-weight: 600; */
    font-family: roboto
  }

  .popup-main .popup-body .alert-btn {
    text-align: right;
    margin-top: 40px
  }

  .popup-main .popup-body .alert-btn button {
    background: var(--blue-sky);
    border: 2px solid var(--blue-sky);
    color: #fff;
    padding: 10px 15px;
    max-width: 100px;
    width: 100%;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
  }

  .popup-main .popup-body .alert-btn button:hover {
    background: transparent;
    color: var(--blue-sky)
  }

  /* ================================
HERO SECTION | OUR PROJECTS PAGE
================================= */
  .project-p .hero-wrapper {
    background: url("img/Banner-picture-Our-Projects.webp") no-repeat;
    background-position: center;
    background-size: cover;
  }

  .project-p .about-com {
    background: var(--blue-dark)
  }

  /* --------ABOUT PROJECT------ */
  .project-p .about-com-main h3 {
    margin-top: 17px;
  }

  /* ==================================
Project SECTION | OUR PROJECTS PAGE
==================================== */
  .project-sec {
    padding: 70px 0;
  }

  .project-sec.cat-1 {
    background: var(--blue-1);
  }

  .project-sec.cat-1 {
    background: var(--blue-dark2);
  }

  .project-sec.cat-2 {
    background: var(--blue-1)
  }

  .project-sec.cat-3 {
    background: var(--blue-dark)
  }

  .project-sec.cat-4 {
    background: var(--blue-dark2)
  }

  .project-sec.cat-5 {
    background: var(--blue-1)
  }

  .project-sec.cat-6 {
    background: var(--blue-dark)
  }

  .project-sec .project-cat {
    text-align: center;
  }

  .project-sec .project-cat h2 {
    margin-top: 25px;
    color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 43px;
    line-height: 1.2;
  }

  .project-sec .project-slider {
    margin: 0 30px;
    position: relative;
    z-index: 902;
  }

  .project-sec .project-box {
    padding: 20px 15px;
  }

  .project-sec .project-box a {
    display: block;
    text-decoration: none;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 10px
  }

  .project-sec .project-box img {
    width: 100%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    min-height: 217px;
    height: 220px;
    /*object-fit: cover;*/
  }

  .project-sec .project-main {
    margin-top: 30px;
    position: relative;
  }

  .project-sec .project-box h4 {
    font-size: 25px;
  }

  .project-sec .project-box .project-details {
    padding: 25px 20px;
  }

  .project-sec .project-main .my-priv-arrow,
  .project-sec .project-main .my-next-arrow {
    position: absolute;
    background: #fff;
    padding: 7px 10px;
    border-radius: 50px;
    cursor: pointer;
    z-index: 100;
    top: 45%;
  }

  .project-sec .project-main .my-priv-arrow i,
  .project-sec .project-main .my-next-arrow i {
    font-size: 20px;
  }

  .project-sec .project-main .my-priv-arrow {
    left: 0;
  }

  .project-sec .project-main .my-next-arrow {
    right: 0;
  }

  .project-slider .slick-dots li.slick-active button:before {
    color: #fff;
    opacity: 1;
  }

  .project-slider .slick-dots li button:before {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.6);
    opacity: 0.5;
  }

  .project-slider ul.slick-dots {
    background: none;
    height: 20px;
    top: auto;
    bottom: -40px;
    left: auto;
  }

  /* ==================================
        Project CHILD PAGE
==================================== */
  .project-det-sec {
    padding: 30px 0;
    background: var(--blue-1);
  }

  .project-det-sec .project-det-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .project-det-sec .project-img {
    margin-top: 10px;
  }

  .project-det-sec .project-img img {
    border-radius: 10px;
    width: 100%;
    border: 1px solid #d8e2ef
  }

  .project-det-sec .project-left {
    width: calc(100% - 400px);
  }

  .project-det-sec .project-left h5,
  .event-det h5 {
    /*color: var(--blue-dark2);*/
    margin-top: 15px
  }

  .project-det-sec .project-left p {
    margin-top: 10px;
  }

  .project-det-sec .project-right {
    max-width: 340px;
    width: 100%;
    border: 1px solid #d8e2ef;
    border-radius: 8px;
    height: 100%;
    margin-top: 48px;
  }

  .project-det-sec .project-right h4 {
    padding: 10px 15px;
    border-bottom: 1px solid #d8e2ef;
  }

  .project-det-sec .project-right ul {
    margin: 10px 0 0 17px;
    padding: 3px 15px;
      max-height: 510px;
    overflow: auto;
    height: auto;
  }

  .project-det-sec .project-right ul li {
    font-size: 16px;
    color: #fff;
    margin: 6px 0;
    line-height: 1.2
  }

  .hero-wrapper.faq-hero {
    position: relative;
    z-index: 100;
  }

  /* ------------FAQ---- */
  .see-more-btn.blue-btn {
    margin: 20px 0 0;
    display: flex;
    justify-content: flex-end;
    width: 100%;
  }

  /* ================================
      CEO msg || HOME PAGE
================================= */
  .ceo-msg-sec {
    background: var(--blue-1);
    padding: 100px 0;
    position: relative;
    z-index: 53;
  }

  .ceo-msg-sec .container {
    max-width: 1200px
  }

  .ceo-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between
  }

  .ceo-main .ceo-img {
    max-width: 400px;
    height: 400px;
    width: 100%;
  }

  .ceo-main .ceo-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 29px;
    object-position: top;
  }

  .ceo-main .ceo-msg {
    width: calc(100% - 440px);
    display: flex;
    flex-direction: column;
    padding: 10px 0;
  }

  .ceo-main .ceo-msg p {
    margin-top: 10px;
  }

  .ceo-main .ceo-det {
    margin-top: auto;
    padding-top: 30px;
  }

  .ceo-main .ceo-det h4 {
    margin-top: 6px;
    font-size: 25px;
    font-style: italic
  }

  /* ================================
      SITE MAP
================================= */
  .site-map-sec {
    background: var(--blue-1);
  }

  .site-map {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    border-bottom: 1px solid #707070;
    padding: 40px 0;
  }

  .site-map .cols {
    width: calc(33.33% - 20px)
  }

  .site-map .cols h2 {
    font-size: 22px;
    margin-bottom: 10px;
  }

  .site-map .cols h3 {
    font-size: 20px;
    color: #fff;
  }

  .site-map .cols a {
    font-size: 20px;
    color: #fff;
    text-decoration: none;
    transition: all 0.3s
  }

  .site-map .cols a:hover {
    text-decoration: underline
  }

  .site-map .cols p {
    font-size: 14px;
    margin-top: 5px;
  }

  .site-map .cols .col-content {
    margin-bottom: 30px
  }

  .site-map .cols ul {
    margin-top: 15px
  }

  .site-map .cols ul li {
    font-size: 16px;
    margin-top: 7px;
    color: var(--grey-1);
    list-style-position: inside
  }

  /*----------updates----*/
  .mail-icon-home {
    width: 24px;
    height: 18px
  }

  /* -----------CANDIDATE DETAILS---------------- */
  .contact-p .contact-us-sec.cond-det {
    padding: 20px 0
  }

  .contact-p .contact-us-sec.cond-det h3 {
    text-align: center;
    width: 100%;
  }

  .contact-p .contact-us-sec.cond-det .contact-left {
    margin-top: 60px
  }

  .person-det .emp-img {
    max-width: 200px;
    height: 200px;
    margin-left: auto;
    background: var(--blue-1);
    padding: 10px 10px;
    border-radius: 8px;
    border: 1px solid var(--blue-light)
  }

  .person-det .emp-img img {
    width: 100%;
    height: 100%;
    object-fit: cover
  }

  .contact-p.get-hired .person-det h5 {
    color: #fff;
    margin-bottom: 6px;
  }

  .get-hired .person-det .form-sec {
    margin-bottom: 30px
  }

  .get-hired .person-det .form-field {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .get-hired .person-det .box {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    padding: 14px 15px;
    background: var(--blue-1);
    border: 1px solid var(--blue-light);
    border-radius: 8px;
    width: calc(50% - 15px);
    margin: 0 0 25px;
  }

  .get-hired .person-det .box.full-box {
    width: calc(100% - 0px);
  }

  .get-hired .person-det .address-field .box {
    width: calc(33.33% - 15px);
  }

  .get-hired .person-det h6 {
    text-align: left;
    margin: 0;
    line-height: 1.3;
    padding-right: 20px;
  }

  .contact-p .contact-us-sec .person-det p,
  .contact-p .contact-us-sec .person-det a {
    margin-top: 0;
    line-height: 1.3;
    font-size: 20px;
    color: var(--grey-1)
  }

  .contact-p .contact-us-sec .person-det a:hover {
    text-decoration: none
  }

  /*-----SWAL POPUPS ---------*/
  body .swal-text {
    font-size: 20px;
    text-align: center;
    line-height: 1.3
  }

  body .swal-button {
    background-color: var(--blue-sky);
  }

  body .swal-button:hover {
    background-color: var(--blue-sky) !important;
    opacity: 0.8;
  }

  body .swal-overlay--show-modal .swal-modal {
    border: 4px solid var(--blue-sky);
    border-radius: 11px;
  }

  .filters-admin select {
    padding: 13px 10px;
    border-radius: 6px;
    background: transparent;
    border: none;
    color: #fff;
    font-size: 16px;
  }

  .filters-admin select:focus {
    outline: none;
  }

  .filters-admin select * {
    color: #000
  }

  .filters-admin .filters-main {
    display: inline-flex;
    align-items: center;
    background: var(--blue-1);
    width: max-content;
    margin-top: 30px;
    border-radius: 6px;
    border: 2px solid var(--blue-sky);
    margin-right: 10px;
  }

  .filters-admin .filters-main button {
    padding: 15px 10px;
    background: var(--blue-sky);
    color: #fff;
    font-size: 16px;
    border: none;
    cursor: pointer
  }

  .all-rec-btn {
    background: var(--blue-1);
    margin-top: 30px;
    color: #fff;
    border-radius: 8px;
    border: 2px solid var(--blue-sky);
    padding: 13px 15px;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s;
    max-width: 210px;
    width: 100%;
  }

  .all-rec-btn:hover {
    background: var(--blue-sky);
  }

  .filters-admin form {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .contact-details-sec .fil-head {
    text-align: left;
  }

  .blue-btns-main {
    display: flex;
    flex-wrap: wrap;
  }

  .blue-btns-main .blue-btn {
    margin-left: 15px;
  }

  /*--------------------------------
      newsletter
---------------------------------*/
  .popup-field input {
    width: 100%;
    padding: 14px 15px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid var(--blue-sky)
  }

  .popup-field input:focus {
    outline: none;
  }

  .newsletter .popup-main .popup-body .alert-btn {
    margin-top: 30px;
  }

  .newsletter .popup-main .popup-body .alert-btn button {
    width: 100%;
    max-width: 100%;
    padding: 12px 15px;
  }

  .newsletter .popup-main .popup-head {
    padding: 12px 10px;
  }

  .newsletter .popup-main .popup-head h4 {
    font-size: 23px;
    padding: 0 25px
  }

  .popup-field input {
    width: 100%;
    padding: 14px 15px;
    margin-top: 20px;
    border-radius: 6px;
    border: 2px solid var(--blue-sky)
  }

  .popup-field input:focus {
    outline: none;
  }

  .newsletter .popup-main .popup-body .alert-btn {
    margin-top: 30px;
  }

  .newsletter .popup-main .popup-body .alert-btn button {
    width: 100%;
    max-width: 100%;
    padding: 14px 15px;
    font-size: 18px;
    border: none;
    background-image: linear-gradient(to right, #015DC4, #0BDEFE)
  }

  .newsletter .popup-main .popup-body .alert-btn button:hover {
    color: #fff;
    background-image: linear-gradient(to left, #015DC4, #0BDEFE)
  }

  .newsletter .popup-main .popup-head {
    padding: 12px 10px;
  }

  .newsletter .popup-main .popup-head h4 {
    font-size: 23px;
    padding: 0 22px
  }


  .newsletter .er-alert {
    border-radius: 4px;
    margin-top: 20px;
    background: #f8d7da;
    border: 1px solid #f5c6cb;
  }

  .newsletter .er-alert h4 {
    font-size: 16px;
    padding: 14px;
    color: #721c24;
    text-align: center;
    font-weight: 500;
  }

  .newsletter .s-alert {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    border-radius: 4px;
    margin-top: 20px;
  }

  .newsletter .s-alert h4 {
    color: #155724;
    font-size: 14px;
    padding: 14px;
    text-align: center;
    font-weight: 500;
  }

  /*---------newsletter-btn----*/
  .newsletter-btn {
    margin-top: 25px;
  }

  .newsletter-btn button {
    background-image: linear-gradient(to right, #015DC4, #0BDEFE);
    padding: 14px 15px;
    border: none;
    border-radius: 6px;
    transition: all 0.3s;
    cursor: pointer;
    color: #fff;
    font-size: 16px;
    font-weight: 500
  }

  .newsletter-btn button:hover {
    background-image: linear-gradient(to left, #015DC4, #0BDEFE);
  }

  /*.popup.newsletter.alert-popup {*/
  /*    display:none;*/
  /*}*/

  /* ================================
     GET hired news update
================================= */
  .fab-news {
    max-width: 320px;
    width: 100%;
  }

  .fab-news .news-header {
    background: var(--blue-sky);
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    padding: 10px 20px;
  }

  .fab-news .news-header h2 {
    text-align: left;
    font-size: 26px;
    margin: 0;
    color: var(--blue-dark2);
  }

  .fab-news .news-body {
    background: var(--blue-1);
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    padding: 15px 10px 15px 10px;
  }

  .fab-news .news-main-box {
    height: 456px;
    overflow: auto;
    padding: 0 10px;
  }

  .fab-news .news-body .news-main-box::-webkit-scrollbar {
    width: 7px;
  }

  .fab-news .news-body .news-main-box::-webkit-scrollbar-thumb {
    background: var(--blue-sky);
    border-radius: 8px;
    border: 1px solid #fff;
  }

  .fab-news .news-body .news-box {
    background: var(--blue-dark2);
    margin-bottom: 10px;
    padding: 10px 15px;
    border-radius: 6px;
  }

  .fab-news .news-body p {
    margin: 0;
    color: #fff;
  }

  .fab-news .news-body .date-time {
    display: flex;
    justify-content: space-between;
    margin-top: 6px;
  }

  .fab-news .news-body .date-time span {
    color: var(--blue-light);
    font-size: 14px;
  }

  #get-hired-fm {
    width: calc(100% - 360px);
  }

  #get-hired-fm .hiring-para-head {
    color: var(--blue-sky);
    margin-top: 15px;
    font-size: 26px;
    font-weight: 600;
  }

  /* ================================
      NEWS ADMIN
================================= */

  .add-news {
    max-width: 500px;
    margin: 0 auto;
    background: var(--blue-1);
    min-height: 300px;
    /*margin-top: 40px;*/
    border-radius: 10px;
    padding: 30px 30px
  }

  .add-news .field {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
  }

  .add-news label {
    color: #fff;
    font-size: 20px;
  }

  .add-news .field input,
  .del-old-btn.field button {
    color: #fff;
    border: 2px solid var(--blue-light);
    background: var(--blue-dark);
    padding: 15px 10px;
    margin-top: 5px;
    border-radius: 8px;
    font-size: 16px;
  }

  .add-news .submit-btn {
    margin-top: 30px;
  }

  .add-news .submit-btn input {
    background: var(--blue-sky);
    border: 2px solid var(--blue-sky);
    padding: 12px 15px;
    font-size: 18px;
    border-radius: 8px;
    // max-width: 120px;
    width: 100%;
    cursor: pointer;
  }

  .add-news .field textarea {
    resize: none;
    color: #fff;
    border: 2px solid var(--blue-light);
    background: var(--blue-dark);
    padding: 10px 10px;
    margin-top: 5px;
    border-radius: 8px;
    font-size: 16px;
    height: 140px
  }

  .add-news .submit-btn input:hover {
    background: transparent;
    color: #fff
  }

  /*.emp-skills {*/
  /*    display: none;*/
  /*}*/

  .emp-skills p {
    color: var(--blue-light);
    margin: 0 0 10px;
    font-size: 20px;
  }

  .skill-option {
    display: none;
  }

  .contact-p.get-hired form .form-sec.software-field {
    margin-top: 0
  }

  .extra-skills.emp-skills {
    display: none;
  }

  /*--------get-hired-custom-checkboxes------*/
  .contact-p form .form-field.apply-for-field input[type=checkbox] {
    position: absolute;
    opacity: 0;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]+label {
    position: relative;
    cursor: pointer;
    padding: 0;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]+label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    width: 16px;
    height: 16px;
    background: transparent;
    border: 2px solid #fff;
    border-radius: 4px;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:hover+label:before {
    background: transparent;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:focus+label:before {
    box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.12);
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:checked+label:before {
    background: transparent;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:disabled+label {
    color: #b8b8b8;
    cursor: auto;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:disabled+label:before {
    box-shadow: none;
    background: #ddd;
  }

  .contact-p form .form-field.apply-for-field input[type=checkbox]:checked+label:after {
    content: '';
    position: absolute;
    left: 5px;
    top: 9px;
    background: #fff;
    width: 2px;
    height: 2px;
    box-shadow: 2px 0 0 #fff, 4px 0 0 #fff, 4px -2px 0 #fff,
      4px -4px 0 #fff, 4px -6px 0 #fff, 4px -8px 0 #fff;
    transform: rotate(45deg);
  }

  .process-list {
    color: #fff;
    font-size: 16px;
    margin-top: 20px;
  }

  .process-list img {
    vertical-align: middle;
    margin: 8px 5px 8px 0;
    width: 24px;
    height: 24px;
  }

  .pixel {
    display: none;
  }

  /*---------hired------changes---*/
  .contact-p form .form-field.apply-for-field {
    display: grid;
    grid-template-columns: auto auto auto auto;
  }

  .contact-p form .form-field .check-field:last-child {
    display: grid;
    grid-column-start: 1;
    grid-column-end: 6;
  }

  .contact-p form .upload-app {
    display: grid;
    grid-column-start: 1;
    grid-column-end: 6;
  }

  .contact-p form .upload-app .form-field.apply-for-field {
    display: flex;
  }

  .contact-p form .form-field.apply-for-field.j-type {
    display: flex;
  }

  .contact-p form .form-field.apply-for-field.week-days {
    display: flex;
  }

  /*=============*/
  .p-gallery-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 -30px;
  }

  .gallery-sec {
    padding: 50px 0;
    background: var(--blue-dark)
  }

  .gallery-img {
    width: calc(50% - 60px);
    margin: 30px 30px;

  }

  .gallery-img img {
    height: 100%;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  }


  /*.Application.project-sec .project-box img {*/
  /*    height: 100%;*/
  /*max-height: 700px;*/
  /*    min-height:440px;*/
  /*    object-fit:cover;*/
  /*}*/

  /*.project-det-sec .project-left.Application .project-img{*/
  /*    max-width: 400px;*/
  /*}*/

  /*==========================*/
  /*courses-styling*/
  /*=========================*/
  .chapters-main {
    margin-top: 30px;
  }

  .chapter {
    border: 1px solid var(--blue-sky);
    margin-top: 15px;
    border-radius: 6px
  }

  .chapter-name {
    background: var(--blue-sky);
    padding: 16px;
    cursor: pointer;
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 4px;
    margin: 0
  }

  .chapter-lecs {
    background: transparent;
    padding: 10px 0;
    display: none;
  }

  .chapter-lecs ul {
    list-style-type: none
  }

  .chapter-lecs li {
    margin: 10px 16px
  }

  .chapter-lecs a {
    color: #fff;
    text-decoration: none;
    font-size: 18px
  }

  .chapter-lecs a:hover {
    opacity: 0.8;
  }

  .chapter-name i {
    margin-right: 5px;
  }

  .chapter-name.active i {
    transform: rotate(180deg);
  }

  .chapter-lecs li a span {
    color: var(--blue-light);
    font-weight: 700;
    max-width: 50px;
    display: inline-block;
    width: 100%;
  }

  /*--------------------course-videos-------------*/
  .fab-video-sec {
    padding: 50px 0
  }

  .fab-video-sec .container {
    max-width: 1200px;
  }

  .fab-video-main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  /* -----course-video------- */
  .course-video-main {
    width: calc(100% - 480px)
  }

  .course-video-main iframe {
    width: 100%;
    height: calc(100% - 0px);
    border-radius: 8px;
  }

  .course-video-main h3 {
    font-size: 32px;
    margin-top: 14px;
    font-weight: 600
  }

  /* -----playlist-video------- */
  .playlist-video-main {
    background: var(--blue-dark);
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    max-width: 430px;
    width: 100%;
    padding: 20px 20px 20px 30px
  }

  .playlist-wrapper {
    height: 420px;
    overflow: auto;
  }

  .playlist-video-main iframe {
    width: 100%;
    height: 106px;
    max-width: 230px;
    border-radius: 14px
  }

  .playlist-video-main .playlist-video {
    margin: 14px 0;
    display: flex;
  }

  .playlist-video-main .playlist-video h4 {
    font-size: 20px;
  }

  .playlist-video-main .playlist-video h5 {
    font-size: 16px;
    color: var(--grey-1)
  }

  .playlist-video-main .playlist-video .video-detail {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 0 20px 10px 20px
  }

  /* ---- scrollbar------ */

  .playlist-wrapper::-webkit-scrollbar {
    width: 4px;
    height: 14px;
  }


  .playlist-wrapper::-webkit-scrollbar-track {
    background: var(--blue-dark2);
  }

  .playlist-wrapper::-webkit-scrollbar-thumb {
    background: var(--grey-1);
    border-radius: 8px;
  }

  /*----------------course-foorm*/

  .course-form .contact-left {
    margin: 0 auto
  }

  .course-form .contact-left p {
    text-align: center;
  }

  .contact-p .contact-us-sec.course-form {
    background: var(--blue-dark2)
  }

  .logo-img {
    max-width: 210px;
  }

  /* ================================
      EVENTs
================================= */
  .events-sec {
    background: var(--blue-1);
    padding: 70px 0
  }

  .events-sec .services-main .service-box {
    background: var(--blue-dark)
  }

  .events-sec .h-para {
    margin-top: 25px
  }


  .events-sec .services-main .service-con p {
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 5;
    display: box;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    height: 107px;
  }

  .events-sec .services-main a {
    margin-top: 10px;
    display: block;
    color: var(--blue-sky);
    text-align: right;
  }

  .events-sec .blue-btn a {
    max-width: 150px;
    text-align: center;
    margin-left: auto;
    margin-top: 30px;
  }

  /*------event-det---*/
  .event-det .container,
  .event-gallery .container {
    max-width: 1160px;
  }

  .event-det .project-right p {
    padding: 10px 15px
  }

  .event-det .project-left h4 {
    margin-top: 20px
  }

  .event-det .project-right ul {
    margin: 14px 0 14px 17px;
  }

  .event-det .project-right ul a {
    text-decoration: none;
    color: #fff;
  }

  .event-det .project-right ul a:hover {
    opacity: 0.8
  }

  .project-det-sec.event-det .project-left {
    height: 100%;
  }

  /*.event-det .project-right {*/
  /*  max-height: 516px;*/
  /*  overflow: auto;*/
  /*  height: auto;*/
  /*}*/

  .event-gallery img {
    object-fit: cover
  }

  .event-gallery .p-gallery-main {
    justify-content: flex-start;
    margin: 0;
  }

  .event-det .project-img {
    max-height: 516px;
    height: 100%;
  }

  .event-det.project-det-sec .project-img img {
    height: 100%;
  }

  /*.event-gallery .gallery-img {*/
  /*    width: 100%;*/
  /*    margin: 0 15px 20px 15px*/
  /*}*/

  /*.event-gallery .p-gallery-main {*/
  /*    column-count: 2;*/
  /*    display: block;*/
  /*    margin: 20px -15px;*/
  /*}*/

  /*-----events-admin----*/
  table .event-imgs {
    display: flex;
    max-width: 290px;
    width: 100%;
    overflow: auto
  }

  table .event-imgs img {
    margin: 0 5px 10px
  }

  .event-imgs::-webkit-scrollbar {
    height: 6px;
  }

  .event-imgs::-webkit-scrollbar-track {
    background: var(--grey-1);
    border-radius: 10px;
  }

  .event-imgs::-webkit-scrollbar-thumb {
    background: var(--blue-light);
    border-radius: 8px;
  }

  .project-det-sec .project-det-main {
    margin: 0 30px
  }

  /* ================================
     Books
================================= */
  /*.books-sec .services-main .service-box {*/
  /*    width: calc(33.33% - 30px);*/
  /*    padding: 15px 15px*/
  /*}*/
  .books-sec {
    padding: 70px 0
  }

  .books-sec .services-main .service-img {
    margin-top: 6px;
  }

  .books-sec .services-main .service-img img {
    border-radius: 6px;
  }

  .book-det-main {
    margin-top: 20px;
  }

  .book-det {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin: 6px 0
  }

  .book-det h3 {
    font-size: 14px;
    padding-right: 5px;
    width: 45%;
  }

  .books-sec .services-main .service-con .book-det p {
    font-size: 12px;
    margin-top: 0;
    width: 55%;
    background: var(--blue-sky);
    padding: 5px 6px;
    text-align: center;
    border-radius: 6px;
    color: #fff;
    word-break: break-all
  }

  .books-sec .services-main .service-con h2 {
    margin: 0 0 5px;
    font-size: 27px;
    /*color: var(--blue-sky);*/
    /*     text-align: center */
  }

  .books-sec .service-box .blue-btn {
    text-align: center;
    margin: 20px 0 0;
    margin-left: auto;

  }

  .books-sec .service-box .blue-btn a {
    padding: 10px 10px;
    font-size: 13px;
  }

  .books-sec .h-para {
    font-size: 38px;
    margin-top: 10px;
  }

.books-sec .service-con {
    display: flex;
    flex-direction: column;
    height: 100%
}

.change-style {
    margin-top: auto
}

.books-sec .service-box .blue-btn {
    width:100%
}

.books-sec .services-main .service-con h2 {
    font-size: 24px
}

.books-sec .services-main .service-img img {
    object-fit: contain
}

/*---searchbar---*/
.search-books input {
    width: 100%;
    padding: 14px 15px;
    border: none;
    color: var(--grey-1);
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    background: transparent
}

.search-books input:focus {
    outline: none;
}


.search-books {
    display: flex;
    background: var(--blue-1);
    border-radius: 10px;
    margin-top: 40px;
    max-width: 500px;
    margin-left: auto;
    border: 1px solid var(--blue-sky)
}

.search-books button{
    padding: 16px 15px;
        background:transparent;
    margin: 0;
    border: none
}

.search-books button i{
    font-size: 18px;
    color: grey
}
.search-books select {
    background: transparent;
    color: #fff;
    width:max-content;
    color: grey;
    border: none;
    outline: none;
    padding: 10px 10px;
    border-left: 1px solid grey;
}

.search-books select:focus {
    outline: none;
}

.note {
    margin-top: 8px
}

/*--btns-update----*/
.home-btns-main {
    display: flex;
}

.home-btns-main .blue-btn {
    margin-right: 10px;
}


/*--------------------*/
/*chat-bots*/
/*--------------------*/
.chatbot-icon{
    /*position: absolute;*/
        bottom: 20px;
    right: 50px;
    cursor: pointer;
    z-index:10;
    max-width:60px;
}

.chatbot-icon img,
.chatbot-icon i{
    border:2px solid var(--blue-sky);
    padding: 10px 10px;
    border-radius: 50%;
    font-size: 32px;
     background: #fff;
    color: var(--blue-sky);
    width:100%;
    transition:all 0.3s;
}
.chatbot-icon img:hover {
    opacity:0.8;
}

.chatbot-icon:hover i{
    background: #fff;
    color: var(--blue-dark);
}

.bot-main {
/*     border: 1px solid yellow; */
    /*position: absolute;*/
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
    top: 0;
    right: 20px;
    width: max-content;
    top: 0;
       min-height: calc(100vh - 132px);
       display:none;
       z-index:10;
}


.bot-main .title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px
}

.bot-main .title .chatbot-close {
    cursor:pointer;
}

body {
    position: relative
}

.chatbot-content {
    position: fixed;
    width: max-content;
    padding-bottom: 6px;
    /*display: flex;*/
    /*align-items: flex-end;*/
    /*justify-content: flex-end;*/
    /*height: 100vh;*/
    /*top: 0;*/
    /*z-index: 100;*/
    right:20px;
    bottom: 0;
    padding-bottom: 6px;
    z-index: 400;
}

.chatbot-content .icon i {
    background: var(--blue-sky);
    padding: 10px 10px;
    border-radius: 50px;
    color: #fff;
    font-size: 12px;
    margin-left:10px;
}

.hero .chat a i{
    font-size:26px;
}

.chatbot-content .title img{
    max-width: 150px !important;
    max-height: 150px !important;
    height: 100%;
    vertical-align:middle;
}

.wrapper .form iframe {
    height: 506px;
}

.wrapper .composer {
    background: #fff !important
}

.wrapper .fixed-height {
    padding-top:0 !important;
}

/*--------------blog-new------*/
.event-det.blog-det .container, .event-gallery .container {
    max-width: 1300px
}

.event-det.blog-det  .project-right {
    margin-top: 10px
}


.blog-det h1 {
    margin: 16px 0
}

.event-det.blog-det .project-img {
    max-height: 100%
}

.event-det.blog-det b {
    color: #fff;
    /*opacity: 0.8;*/
}

.res-tbl table.blog-tbl {
    width: 100%;
    width: 1800px;
}

.con-det-blog {
    margin-bottom:20px;
}

.blog-des-admin::-webkit-scrollbar {
    width: 6px;
  }

  .blog-des-admin::-webkit-scrollbar-track {
    background: var(--grey-1);
  }

  .blog-des-admin::-webkit-scrollbar-thumb {
    background: var(--blue-sky);
    border-radius: 8px;
  }
  
  .blog-det .project-left a {
    color: var(--blue-sky);
    transition: all 0.3s;
    text-decoration: none;
}

.blog-det .project-left a:hover {
    text-decoration: underline
}

.blog-det .project-left .my-para h2,
.blog-det .project-left h1{
        color: #fff;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 600;
    font-size: 30px;
    line-height: 1.2;
    margin:16px 0;
}

.my-para {
    color: var(--grey-1);
     /*text-align: justify;*/
    margin: 16px 0
}

.events-sec .services-main .service-con .para-main {
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-line-clamp: 5;
    display: box;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    height: 107px;
    margin-top: 8px;
    font-family: Arial, Courier New, Times New Roman;
    font-weight: 400;
    font-size: 16px;
    color: var(--grey-1);
    line-height: 1.3;
    
}
.events-sec .services-main .service-con .para-main a{
    margin-top:0;
    display:inline;
}

.blog-tbl .blog-des-admin h2{
    font-size: 14px
}

.res-tbl .blog-tbl td a {
    background: none;
    border: 0;
    padding: 0;
    display: inline;
    color: var(--blue-sky)
}

.blog-des-admin {
    max-height: 170px;
    overflow: auto
}

.res-tbl .blog-tbl td .del-can {
    color: #fff;
    padding: 8px 13px;
}

.blog-all.events-sec .services-main .service-box {
    width: calc(33.33% - 30px);
}

.blog-all.events-sec .services-main .service-img-m img {
    height: 100%;
}

  /* ================================
      Media Queries
================================= */

  @media screen and (max-width: 1400px) {
    .main-nav .logo {
      margin-left: 0;
    }
  }

  @media screen and (max-width: 1200px) {
    .main-nav .navbox a {
      font-size: 14px;
    }

    /* ------------Primary-nav---------- */
    .primary-nav .p-nav-right .p-links {
      margin-right: 10px;
    }

    .primary-nav .p-nav-right .p-social a {
      margin: 0 12px;
      display: block;
    }

    .primary-nav .p-nav-right .p-links li {
      margin: 0 12px;
    }

    .primary-nav .p-nav-left a {
      margin-right: 20px;
    }

    /* ---------------main-nav---------------- */
    .main-nav .navbox li {
      padding: 10px 8px;
    }

    .call span:first-child {
      font-size: 16px;
    }

    .call span:last-child {
      font-size: 14px;
    }

    .main-nav .navbox img {
      padding: 10px 3px 10px 5px;
      width: 9px;
      height: 40px;
    }

    .main-nav .call .icon {
      width: 40px;
      height: 40px;
    }

    .main-nav .navbox {
      padding-left: 5px;
    }

    .main-nav .navbox .chat-btn a {
      padding: 10px 8px;
    }

    /* -------clickable-search-operation----- */
    .main-nav .navbox .search-box-d {
      max-width: 452px;
    }

    /* ------------HERO SECTION------------- */
    .hero {
      max-width: 470px;
    }

    .hero.home-hero {
      max-width: 650px;
    }

    /* ------------SERVICES MAIN------------- */
    .services-main {
      margin: 0 -10px;
    }

    .services-main .service-box {
      width: calc(25% - 20px);
      margin: 50px 10px 0;
    }

    /* ------------why-fab-sec------ */
    .why-fab .why-fab-services {
      max-width: 100%;
    }

    /* ---------CONTACT------------ */
    .contact .contact-con {
      width: calc(50% - 30px)
    }

    .contact .contact-img:before {
      width: 400px;
      height: 400px;
    }

    .contact .contact-img:after {
      right: -120px;
      width: 200px;
      height: 200px;
    }

    /* --------TEAM SECTION---------- */
    .team-main .team-box {
      width: calc(33% - 50px);
      margin: 15px 25px;
    }

    /* -------testimonial-sec----- */
    .testimonial-main .t-box-top .star-icons img {
      width: 21px;
      height: 20px;
    }

    /* --------brand-section || about-page---- */
    .brand-main .brands-box {
      width: calc(100% - 380px);
    }

    /* -----HERO SECTION ||CONTACT-PAGE---- */
    .contact-p .hero-wrapper {
      background-position: 60% 100%;
    }

    /* -----EXPERT BANNER SECTION ||CONTACT-PAGE---- */
    .expert-banner .expert-ban {
      background-position: center;
    }

    .contact-p form .form-field.apply-for-field {
      display: flex !important;
      /*grid-template-columns: auto auto auto auto;*/
    }
    
    .books-sec .services-main .service-box {
      width: calc(33.33% - 20px);
    }
    
    .logo-img {
    max-width: 204px;
}

  /* ------------Primary-nav---------- */
    .primary-nav .p-nav-left a:first-child {
      max-width: 180px;
    }

    .p-nav-right>ul {
      margin-top: 12px
    }

    .primary-nav {
      flex-direction: column;
    }

    .primary-nav .p-nav-left a:last-child {
      margin-right: 0px;
    }

    .primary-nav .p-nav-left a:first-child {
      max-width: 100%;
    }

    .primary-nav>div {
      justify-content: center;
    }
    
    .blog-all.events-sec .services-main .service-box {
    width: calc(33.33% - 20px);
}

  }

  @media screen and (max-width: 1024px) {
      .primary-nav-wrapper {
          display:none;
      }
    h3 {
      font-size: 37px;
    }

    h2 {
      font-size: 42px;
    }

    h4 {
      font-size: 27px;
    }

    h5 {
      font-size: 24px;
    }

    /* ------------Primary-nav---------- */
    .main-nav-r {
      display: none;
    }

    .primary-nav a {
      font-size: 14px
    }

    /* ---------------main-nav------------- */
    .mbl-nav .close,
    .main-nav .togg,
    .res-con .mbl-chat {
      display: block;
    }

    .main-nav .res-con {
      display: flex;
    }

    /* ---------------HERO------------- */
    .hero h1 {
      font-size: 55px;
    }

    /* ----------OPTION SECTION----------- */
    .options-main .option-box {
      width: calc(50% - 30px);
      margin-top: 20px;
    }

    .options {
      padding: 80px 0 40px;
    }

    /* ------------About Company----------- */

    .about-com-main .about-img {
      padding-right: 10px;
    }

    .about-com-main>div {
      width: calc(50% - 10px);
    }

    .about-com-main .about-ftr .blue-btn {
      margin-right: 10px;
    }

    /* ------------SERVICES------------- */
    .services-content .service-head {
      max-width: 100%;
      width: calc(50% - 15px);
    }

    .services-content .service-para {
      width: calc(50% - 10px);
    }

    .services-main {
      margin: 0 -10px;
    }

    .services-main .service-box {
      width: calc(33.33% - 20px);
      margin: 50px 10px 0;
    }

    .services-wrapper {
      padding: 100px 0 184px;
    }

    /* --------why-fab-sec------ */
    .why-fab>div {
      width: calc(100% - 0px);
    }

    .why-fab-wrapper:before {
      display: none;
    }

    .why-fab-wrapper:after {
      display: none;
    }

    .why-fab-wrapper .why-fab-img {
      display: block;
      background: url("img/why-fab-bg.png");
      background-size: cover;
    }

    .why-fab-wrapper .why-fab-img img {
      width: calc(100% + 0px);
      height: 100%;
      position: relative;
      vertical-align: bottom;
      text-align: right;
    }

    /* ----------technology section-------- */
    .tech-main {
      margin: 0 -10px;
    }

    /*.tech-main .tech-box {*/
    /*    margin: 30px 20px;*/
    /*    width: calc(16.66% - 20px);*/
    /*}*/

    .tech-sec:after {
      background-position: bottom right;
    }

    /* -----------testimonial-sec------- */
    .testimonial-wrapper {
      padding: 100px 0 100px;
    }

    .testimonial-main .testimonial-box {
      padding: 40px 30px;
    }

    .testimonial-main ul.slick-dots {
      bottom: -40px;
    }

    /* ---Footer section----- */
    .ftr-main .ftr-col:nth-of-type(1) {
      width: calc(33.33% - 15px);
      margin: 15px 0;
    }

    .ftr-main .ftr-col:nth-of-type(2) {
      width: calc(33.33% - 15px);
      margin: 15px 0;
    }

    .ftr-main .ftr-col:nth-of-type(3) {
      width: calc(33.33% - 15px);
      margin: 15px 0;
    }

    /* --------brand-section || about-page---- */
    .brand-main .brands-box {
      width: calc(100% - 0px);
      margin-top: 20px
    }

    .brand-main .brand-text {
      max-width: 100%;
    }

    /* --------testimonial section || about-page---- */
    .about-p-testimonial .why-fab-about>div {
      width: calc(50% - 24px);
    }

    .about-p-testimonial .testimonial-main {
      height: 790px;
    }

    /* --------FAQ section || about-page---- */
    .faq-sec .accordion-list li {
      width: calc(50% - 15px);
    }

    /* --------EXPERT SECTION || SERVICES-PAGE---- */
    .services-p .team-main .expert-des {
      width: calc(100% - 260px);
    }

    /* -----CONTACT-US SECTION ||CONTACT-PAGE---- */
    .contact-p .contact-us-main>div {
      width: calc(100% - 0px)
    }

    .contact-p form {
      margin-top: 30px;
    }

    .contact-p .contact-us-con a:first-child {
      width: calc(50% - 15px)
    }

    .contact-p .contact-us-con a:last-child {
      width: calc(50% - 15px);
    }

    .contact-p .contact-us-sec {
      padding: 70px 0;
    }

    /* -----EXPERT BANNER SECTION ||CONTACT-PAGE---- */
    .expert-banner .expert-ban {
      background-position: 37% 100%
    }

    .expert-banner .expert-ban .expert-con {
      max-width: 401px;
    }

    /* -----OPTION SECTION || CONTACT-PAGE---- */
    .software-service .options {
      padding: 70px 0;
    }


    /*   ------HERO SECTION |Software dev page---- */
    .software-service.services-p .hero-wrapper {
      background-position: right;
      position: relative;
    }

    .software-service.services-p .hero-wrapper:before {
      position: absolute;
      content: '';
      background: var(--blue-dark);
      width: 100%;
      height: 100%;
      opacity: 0.7;
    }

    .hero-wrapper .container {
      position: relative;
    }

    /* -----procedure section || software dev page---- */
    .procedure-sec:after {
      background-size: 28%;
    }

    .procedure-sec:before {
      background-size: 54%;
      background-position: 0% 4%;
    }

    /* -----core value options || blog p---- */
    .blog-p .options-main .option-box {
      width: calc(33.33% - 15px);
    }

    /* ------project child page------ */
    .project-det-sec .project-left {
      width: calc(100% - 0px);
    }


    .project-det-sec .project-right {
      max-width: 100%;
      width: 100%;
      margin-top: 30px;
    }

    /*----------CEO-sec---*/
    .ceo-main .ceo-msg {
      width: calc(100% - 390px);
    }

    .ceo-main .ceo-img {
      max-width: 350px;
      height: 350px;
    }

    .event-det .project-img {
      max-height: 100%;
    }

    .event-det .container,
    .event-gallery .container {
      max-width: 860px;
    }
    
    /*----update-sidenav----*/
    .mbl-prime.primary-nav a{
    color: #fff
}

.mbl-prime.primary-nav>div {
    justify-content: flex-start
}

.primary-nav.mbl-prime {
    align-items: start
}

.primary-nav.mbl-prime .p-nav-left a {
    align-items: flex-start;
    flex-wrap: nowrap;
    margin-bottom: 10px;
    line-height: 1.4
}
.primary-nav .p-nav-right .p-links {
    flex-wrap: wrap;
}

.hero {
    min-height: calc(100vh - 86px);
}

.blog-all.events-sec .services-main .service-box {
    width: calc(50% - 20px);
}

  }


  @media screen and (max-width: 860px) {

  
    /* ---------------HERO----------------- */
    .hero h1 {
      font-size: 50px;
    }

    /*.hero {*/
    /*  min-height: calc(100vh - 169px);*/
    /*}*/

    /* ------------About Company----------- */
    h2 {
      font-size: 42px;
    }

    .about-com-main {
      flex-direction: column-reverse;
      justify-content: center;
      align-items: center;
    }

    .about-com-main .about-img {
      padding-right: 0px;
      max-width: 500px;
      margin-top: 50px;
    }

    .about-com-main>div {
      width: calc(100% - 0px);
    }

    .about-com-main .about-ftr .blue-btn {
      margin-right: 30px;
    }

    .about-content {
      text-align: center;
    }

    .call span,
    .owner-name-main h6 {
      text-align: left;
    }

    /* ------------SERVICES------------- */
    .services-content .service-head {
      width: calc(100% - 0px);
    }

    .services-content .service-para {
      width: calc(100% - 0px);
      margin-top: 10px;
    }

    .services-content-m,
    .services-content .service-para p {
      text-align: center;
    }

    /* ---------WHY FAB----------- */
    .why-fab-con {
      text-align: center;
    }

    /* ---------CONTACT------------ */
    /*.contact-wrapper .contact {*/
    /*  align-items: flex-end;*/
    /*}*/

    .contact .contact-con {
      width: calc(50% - 20px)
    }

    .contact .contact-img {
      max-width: 100%;
      width: calc(50% - 20px)
    }

    .contact .contact-img img {
      padding: 0
    }

    /* ----------technology section-------- */
    /*.tech-main .tech-box {*/
    /*    width: calc(25% - 20px);*/
    /*}*/

    /* --------TEAM SECTION---------- */
    .team-main .team-box {
      width: calc(33% - 30px);
      margin: 15px 15px;
    }

    /* --------TESTIMONIAL SECTION---------- */
    .testimonial-main .t-box-top {
      justify-content: center;
    }

    .testimonial-main .t-box-top .t-con {
      width: 100%;
      margin: 20px auto 0;
      text-align: center;
    }

    .testimonial-main .t-box-top .star-icons {
      justify-content: center
    }

    .testimonial-main .t-box-top .t-img {
      margin: 0;
    }

    .testimonial-main .testimonial-des p {
      text-align: center;
    }

    /* ---------BANNER SECTION------- */
    .banner-sec .banner-con h5 {
      max-width: 100%;
    }

    .banner-sec .banner-con {
      width: 100%;
      justify-content: center;
    }

    .banner-sec .banner-box {
      justify-content: center;
    }

    .banner-sec .banner-btn {
      margin-top: 20px;
    }

    /* --------testimonial section || about-page---- */
    .about-p-testimonial .why-fab-about>div {
      width: calc(100% - 0px);
    }

    .about-p-testimonial .testimonial-main {
      height: 810px;
    }

    /* --------FAQ section || about-page---- */
    .faq-sec .accordion-list li {
      width: calc(100% - 0px);
    }

    /* --------HERO section || SERVICES-page---- */
    .services-p .hero-wrapper {
      background-position: 65%;
    }

    /*   ------ABOUT-COM SECTION | SOFTWARE DEV PAGE---- */
    .software-service .about-com-main .about-img {
      width: calc(100% - 0px);
    }

    .software-service .about-com-main .about-content {
      width: calc(100% - 0px);
    }

    .software-service .about-com-main .about-content p {
      text-align: center
    }

    /*   ------HERO SECTION |Software dev page---- */
    .software-service .hero {
      max-width: 100%;
    }

    .software-service .hero-con {
      justify-content: center
    }

    .services-p.software-service .hero h6 {
      text-align: center;
    }

    .services-p.software-service .hero-wrapper .hero-icon {
      margin: 0 0 15px;
    }

    .software-service .hero-con {
      flex-direction: column;
    }

    .software-service .hero p {
      text-align: center
    }

    /* -----blog section || blog page---- */
    .blog-sec .blog-con-main>div {
      width: calc(100% - 0px);
    }

    .blog-sec .blog-con-main p,
    .blog-sec .blog-con-main h3,
    .blog-sec .blog-con-main h4 {
      text-align: center;
    }


    /* -----HERO SECTION || projects-PAGE---- */
    .project-p .hero-wrapper {
      background-position: right;
      position: relative;
    }

    .project-p .hero-wrapper:before {
      position: absolute;
      content: '';
      background: var(--blue-dark);
      width: 100%;
      height: 100%;
      opacity: 0.7;
    }

    .project-p .hero-wrapper .container {
      position: relative;
    }

    /*----------CEO-sec---*/
    .ceo-main .ceo-msg {
      width: calc(100% - 0px);
    }

    .ceo-main .ceo-img {
      max-width: 400px;
      height: 400px;
      margin-left: auto;
      margin-top: 30px;
    }

    .ceo-main {
      flex-direction: column-reverse;
    }

    .ceo-msg-sec {
      padding: 70px 0
    }

    .fab-news {
      max-width: 100%;
      margin-top: 40px;
    }

    #get-hired-fm {
      width: calc(100% - 0px);
    }

    .software-service .about-com-main .about-content h2 {
      text-align: center;
    }


    .gallery-img {
      width: calc(50% - 30px);
      margin: 30px 15px;
    }

    .project-det-sec .project-det-main {
      margin: 0 15px;
    }
    
    
    .books-sec .services-main .service-box {
      width: calc(50% - 20px);
    margin: 50px 10px 0;
    }
    
.services-content .service-head .h-para,
.about-com-main .about-content p.h-para, 
.about-com-main .about-content h2,
.faq-sec h2{
    font-size: 37px;
    text-align: center;
}

  }

  @media screen and (max-width: 768px) {

    /* ------------SERVICES------------- */
    .services-main {
      margin: 0 -10px;
    }

    .services-main .service-box {
      width: calc(50% - 20px);
      margin: 50px 10px 0;
    }

    .services-wrapper {
      padding: 100px 0 135px;
    }

    /* ---------CONTACT------------ */
    .contact-wrapper .contact {
      /*align-items: flex-end;*/
      flex-direction: column-reverse;
    }

    .contact .contact-con {
      width: calc(100% - 0px)
    }

    .contact .contact-img {
      /*max-width: 300px;*/
      width: calc(100% - 0px);
      /*margin-top: -70px;*/
    }

    .contact .contact-img:before {
      width: 300px;
      height: 300px;
    }

    .contact .contact-img:after {
      right: auto;
      left: -85px;
      width: 150px;
      height: 150px;
    }

    .contact-con {
      text-align: center;
    }

    /* ----------team section-------- */
    .team-main .team-box {
      width: calc(50% - 30px);
      margin: 15px 15px;
    }

    .team-sec:before {
      width: 50%;
      margin-left: 50%;
    }

    /* --------TESTIMONIAL SECTION---------- */
    .testimonial-wrapper {
      padding: 80px 0 60px;
    }

    .testimonial-main .testimonial-box {
      width: calc(100% - 0px);
      padding: 40px 40px;
      margin: 20px auto;
      max-width: 500px;
    }

    .testimonial-main {
      margin-top: 30px;
    }

    .testimonial-wrapper:before {
      background-size: 85%;
    }

    /* ---Footer section----- */
    .ftr-main .ftr-col:nth-of-type(1) {
      width: calc(100% - 0px);
      margin: 0;
      text-align: center
    }

    .ftr-main .ftr-col:nth-of-type(2) {
      width: calc(50% - 35px);
      margin: 45px 0;
    }

    .ftr-main .ftr-col:nth-of-type(3) {
      width: calc(50% - 35px);
      margin: 45px 0;
    }

    .ftr-main .ftr-col .social-icons {
      justify-content: center;
    }

    /* --------brand-section || about-page---- */
    .brand-main .brands-box {
      width: calc(100% - 0px);
      margin-top: 20px
    }

    .brand-main .brands-box .brand-img img {
      width: 100%;
      height: 100%;
    }

    /* --------testimonial section || about-page---- */
    .about-p-testimonial .testimonial-main {
      height: 840px;
    }

    /* --------STATS section || about-page---- */
    .stats-sec .stats-box {
      width: calc(33.33% - 0px)
    }

    /* -----HERO SECTION ||services-PAGE---- */
    .services-p .hero-wrapper {
      background-position: 80%;
      position: relative;
    }

    .services-p .hero-wrapper:before {
      position: absolute;
      content: '';
      background: var(--blue-dark);
      width: 100%;
      height: 100%;
      opacity: 0.7;
    }

    .services-p .hero-wrapper .container {
      position: relative;
    }

    /* --------EXPERT SECTION || SERVICES-PAGE---- */
    .services-p .team-main .expert-contact {
      max-width: 170px;
    }

    .services-p .team-main .expert-des {
      width: calc(100% - 200px);
    }

    .services-p .team-main .contact-detail {
      padding: 5px 10px;
    }

    /* -----HERO SECTION ||CONTACT-PAGE---- */
    .contact-p .hero-wrapper {
      background-position: 70%;
      position: relative;
    }

    .contact-p .hero-wrapper:before {
      position: absolute;
      content: '';
      background: var(--blue-dark);
      width: 100%;
      height: 100%;
      opacity: 0.5;
    }

    /* -----EXPERT BANNER SECTION ||CONTACT-PAGE---- */
    .expert-banner .expert-ban {
      background-position: 30% 100%
    }

    .expert-banner .expert-ban .expert-con {
      max-width: 273px;
    }

    .expert-banner .expert-ban {
      padding: 50px 15px;
    }

    .expert-banner .expert-ban .expert-con h4 {
      font-size: 30px;
    }

    /*  ------- contact SECTION | GET HIRED PAGE--- */
    .contact-p.get-hired form .input-field {
      width: calc(50% - 10px);
    }

    /* -------PROCEDURE SEC|| SOFTWARE DEV PAGE----- */
    .procedure-sec:before {
      background-size: 77%;
      background-position: 0% 3%;
    }

    .procedure-sec .graph .phase-content {
      width: 100%;
      max-width: 230px;
      padding: 35px 15px 15px 25px;
    }

    .procedure-sec .graph {
      max-width: 600px;
    }

    .procedure-sec .graph .phase li {
      font-size: 14px
    }

    .procedure-sec .graph .phase-1 {
      top: -100px;
    }

    .procedure-sec .graph .phase-2 {
      top: 10px;
    }

    .procedure-sec .graph .phase-3 {
      top: 220px;
      left: 165px;
    }

    .procedure-sec .graph .phase-4 {
      bottom: -35px;
      left: 75px
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    .procedure-sec.web-pro .graph {
      max-width: 550px;
    }

    .procedure-sec .graph .phase-1-text {
      top: 126px;
      right: 70px;
    }

    .procedure-sec .graph .phase-2-text {
      top: 395px;
      left: 60px;
    }

    .procedure-sec .graph .phase-3-text {
      bottom: 462px;
      right: 70px;
    }

    .procedure-sec .graph .phase-4-text {
      bottom: 173px;
      left: 60px;
    }

    .procedure-sec .graph .web-phase-1 {
      top: 83px;
    }

    .procedure-sec .graph .web-phase-2 {
      top: 370px;
    }

    .procedure-sec .graph .web-phase-3 {
      bottom: 380px;
    }

    .procedure-sec .graph .web-phase-4 {
      bottom: 75px
    }

    /* -------PROCEDURE SEC|| APP DEV PAGE----- */
    h6 {
      font-size: 18px
    }

    .procedure-sec .graph .app-phase-1 {
      top: 70px;
      left: 0px;
    }

    .procedure-sec .graph .app-1-text {
      top: 128px;
      right: 60px;
    }

    .procedure-sec .graph .app-phase-2 {
      top: 330px;
      right: 0;
    }

    .procedure-sec .graph .app-2-text {
      top: 403px;
      left: 32px;
    }

    .procedure-sec .graph .app-phase-3 {
      top: 630px;
      left: 0;
    }

    .procedure-sec .graph .app-3-text {
      top: 704px;
      right: 60px;
    }

    .procedure-sec .graph .app-phase-3b {
      bottom: 530px;
      right: 0;
    }

    .procedure-sec .graph .app-phase-4 {
      bottom: 225px;
      left: 0;
    }

    .procedure-sec .graph .app-4-text {
      bottom: 257px;
      right: 60px;
    }

    /* --------hero || blog page--- */
    /* -----HERO SECTION ||services-PAGE---- */
    .blog-p .hero-wrapper {
      background-position: 80%;
      position: relative;
    }

    .blog-p .hero-wrapper:before {
      position: absolute;
      content: '';
      background: var(--blue-dark);
      width: 100%;
      height: 100%;
      opacity: 0.7;
    }

    .blog-p .hero-wrapper .container {
      position: relative;
    }

    /* -----core value options || blog p---- */
    .blog-p .options-main .option-box {
      width: calc(50% - 15px);
    }

    .blog-p .options .options-con h3 {
      font-size: 30px;
    }

    .blog-p .quality-policy-main .quality-box {
      width: calc(100% - 0px);
    }

    .blog-p .quality-box .icon {
      margin: 0 auto;
    }

    .blog-p .quality-box p {
      text-align: center;
    }

    /*----------sitemap-------*/
    .site-map .cols {
      width: calc(50% - 20px);
    }

    /* -----------CANDIDATE DETAILS---------------- */
    .get-hired .person-det .box,
    .get-hired .person-det .address-field .box {
      width: calc(100% - 0px);
    }

    .options-main {
      margin: 0;
    }

    .options-main .option-box {
      width: calc(100% - 0px);
      margin-top: 30px;
    }
.blog-det .project-left .my-para h2,
.blog-det .project-left h1 {
    font-size: 26px
}

.blog-all.events-sec .services-main .service-box {
    width: calc(100% - 0px);
}

  }

  @media screen and (max-width: 600px) {

    /* ---------------HERO----------------- */
    .hero h1,
    .hero p {
      text-align: center;
    }

    .hero {
      max-width: 100%;
      align-items: center;
    }

    .hero h1 {
      font-size: 44px;
      
    }

    /* ----------OPTION SECTION----------- */

    .options {
      padding: 80px 0 40px;
    }

    /* ------------SERVICES------------- */
    .services-main {
      margin: 0;
    }

    .services-main .service-box {
      width: calc(100% - 0px);
      margin: 30px auto 0;
      max-width: 400px;
    }

    .services-wrapper {
      padding: 70px 0 100px;
    }

    /* ---------why fab sec------------ */
    .why-fab .why-fab-box {
      width: calc(50% - 10px);
    }

    /* ----------technology section-------- */
    /*.tech-main .tech-box {*/
    /*    width: calc(33.33% - 20px);*/
    /*}*/

    /* --------TESTIMONIAL SECTION---------- */
    .testimonial-wrapper {
      padding: 80px 0 60px;
    }

    /* ---Footer section----- */

    .ftr-main .ftr-col:nth-of-type(2) {
      width: calc(50% - 15px);
      margin: 45px 0;
    }

    .ftr-main .ftr-col:nth-of-type(3) {
      width: calc(50% - 15px);
      margin: 45px 0;
    }

    /* --------brand-section || about-page---- */
    .brand-main {
      padding: 20px 20px;
    }

    /* --------FAQ-section || about-page---- */
    .faq-sec:before {
      background-size: 85%;
    }

    /* --------EXPERT SECTION || SERVICES-PAGE---- */
    .services-p .team-main .expert-contact {
      max-width: 170px;
      margin: 0 auto;
    }

    .services-p .team-main .expert-des {
      width: calc(100% - 0px);
      margin-top: 30px;
    }

    /* -----CONTACT-US SECTION ||CONTACT-PAGE---- */
    .contact-p .contact-us-con a:first-child,
    .contact-p .contact-us-con a:last-child {
      width: calc(100% - 0px);
    }

    .contact-p .contact-us-con a:last-child {
      margin-top: 15px;
    }

    /* -------PROCEDURE SEC|| SOFTWARE DEV PAGE----- */
    .procedure-sec .graph {
      max-width: 470px;
    }

    .procedure-sec .graph .phase-content {
      max-width: 200px;
      padding: 20px 10px 7px 23px;
    }

    .phase-overlay-img img {
      width: 20px;
      height: 23px;
    }

    .procedure-sec .graph .phase h5 {
      font-size: 18px;
    }

    .phase-overlay-img {
      padding: 10px 12px;
      top: -25px;
      left: 67%
    }

    .procedure-sec .graph .phase li {
      font-size: 14px;
      margin: 6px 0
    }

    .procedure-sec .graph .phase-1 {
      top: -80px;
      right: 25px
    }

    .procedure-sec .graph .phase-2 {
      top: 0px;
      left: 0px;
    }

    .procedure-sec .graph .phase-3 {
      top: 180px;
      left: 125px;
    }

    .procedure-sec .graph .phase-4 {
      bottom: -25px;
      left: 55px
    }

    .procedure-sec:after {
      background-size: 37%;
    }

    .procedure-sec:before {
      background-size: 77%;
      background-position: 0% 12%;
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    .procedure-sec.web-pro .graph {
      max-width: 440px;
    }

    .procedure-sec.web-pro .graph .phase-content {
      padding: 35px 15px 15px 25px;
    }

    .procedure-sec .graph .phase-1-text {
      top: 95px;
      right: 34px;
    }

    .procedure-sec .graph .phase-2-text {
      top: 310px;
      left: 21px;
    }

    .procedure-sec .graph .phase-3-text {
      bottom: 380px;
      right: 30px;
    }

    .procedure-sec .graph .phase-4-text {
      bottom: 151px;
      left: 23px;
    }

    .procedure-sec .graph .web-phase-1 {
      top: 60px;
    }

    .procedure-sec .graph .web-phase-2 {
      top: 260px;
    }

    .procedure-sec .graph .web-phase-3 {
      bottom: 283px;
    }

    .procedure-sec .graph .web-phase-4 {
      bottom: 60px;
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    h6 {
      font-size: 18px
    }

    .procedure-sec .graph .app-phase-1 {
      top: 50px;
      left: 0px;
    }

    .procedure-sec .graph .app-1-text {
      top: 98px;
      right: 40px;
    }

    .procedure-sec .graph .app-phase-2 {
      top: 250px;
      right: 0;
    }

    .procedure-sec .graph .app-2-text {
      top: 315px;
      left: 16px;
    }

    .procedure-sec .graph .app-phase-3 {
      top: 480px;
      left: 0;
    }

    .procedure-sec .graph .app-3-text {
      top: 558px;
      right: 40px;
    }

    .procedure-sec .graph .app-phase-3b {
      bottom: 410px;
      right: 0;
    }

    .procedure-sec .graph .app-phase-4 {
      bottom: 175px;
      left: 0;
    }

    .procedure-sec .graph .app-4-text {
      bottom: 216px;
      right: 40px;
    }

    /* -----core value options || blog p---- */
    .blog-p .options-main .option-box {
      width: calc(50% - 10px);
    }

    /*----------CEO-sec---*/

    .ceo-main .ceo-img {
      max-width: 400px;
      height: 400px;
      margin: 30px auto 0;
    }

    /*----------sitemap-------*/
    .site-map .cols {
      width: calc(100% - 0px);
    }

    .logo-img {
      max-width: 200px;
    }

    .gallery-img {
      width: calc(100% - 0px);
      margin: 15px 0px;
    }

    .project-det-sec .project-det-main {
      margin: 0;
    }

    .books-sec .h-para {
      font-size: 30px;
    }

    .books-sec .services-main .service-box {
      width: calc(100% - 0px);
       margin:30px auto 0;

    }
    
    
  }

  @media screen and (max-width: 520px) {

    /* -------PROCEDURE SEC|| SOFTWARE DEV PAGE----- */
    .procedure-sec .graph {
      max-width: 400px;
    }

    .procedure-sec .graph .phase h5 {
      font-size: 16px;
      margin-bottom: 2px
    }

    .procedure-sec .graph .phase li {
      font-size: 12px;
      margin: 5px 0
    }

    .procedure-sec .graph .phase-content {
      max-width: 160px;
      padding: 20px 10px 7px 20px;
    }

    .procedure-sec .graph .phase-1 {
      top: -80px;
      right: 30px
    }

    .procedure-sec .graph .phase-2 {
      top: -25px;
      left: 0px;
    }

    .procedure-sec .graph .phase-3 {
      top: 150px;
      left: 105px;
    }

    .procedure-sec .graph .phase-4 {
      bottom: -45px;
      left: 45px
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    .procedure-sec.web-pro .graph .phase-content {
      max-width: 180px;
      padding: 20px 10px 7px 23px;
    }

    .procedure-sec.web-pro .graph .phase li {
      font-size: 14px;
      margin: 12px 0;
    }

    /* -----core value options || blog p---- */
    .blog-p .options-main .option-box {
      width: calc(100% - 0px);
      margin: 10px 0;
    }
.home-btns-main{
    flex-direction: column
}

.home-btns-main .blue-btn {
    margin-right: 0px;
}

.home-btns-main .blue-btn a{
    width: 100%
}


/*.home-btns-main .blue-btn .icon{*/
/*    width: 22px;*/
/*    height: 22px*/
/*}*/

.home-btns-main .chat.blue-btn a {
    font-size: 16px
}
.blog-det .project-left .my-para h2,
.blog-det .project-left h1 {
    font-size: 22px
}

  }

  @media screen and (max-width: 480px) {
    .container {
      padding: 0 15px;
    }

    h2 {
      font-size: 35px;
    }

    h3 {
      font-size: 32px;
    }

    h4 {
      font-size: 25px;
    }

    /* ---------------main-nav---------------- */
    .main-nav .togg {
      margin-right: 10px;
    }

    .res-con .mbl-chat a {
      font-size: 14px;
    }

    .main-nav .logo span:first-child {
      font-size: 22px;
      /*     letter-spacing: 1px; */
    }

    .main-nav .logo span:last-child {
      font-size: 11px;
    }

    /*.main-nav .logo .logo-img img {*/
    /*    width: 35px;*/
    /*    height: 35px;*/

    /*}*/

    /* ------------HERO-------------- */
    .hero h1 {
      font-size: 44px;
    }

    /* ----------About Company-------- */
    .about-com-main .about-ftr {
      flex-direction: column;
      align-items: flex-start;
    }

    .about-com-main .about-ftr .call-btn {
      margin-top: 22px;
    }

    .about-com-main .experience-box {
      background: var(--blue-sky);
      display: inline-flex;
      padding: 10px 5px;
    }

    .about-com-main .experience {
      padding: 10px 10px;
    }

    .about-com-main .experience p {
      max-width: 95px;
      font-size: 16px;
    }

    .about-com-main .experience h2 {
      margin-right: 13px;
      font-size: 35px;
    }

    .about-com-main .experience:before {
      width: 47%;
      height: 50%;
      left: 42px;
    }

    .about-com-main .experience-box:before {
      height: 42px;
      width: 55px;
      right: -54px;
    }

    /* ---------why fab sec------------ */
    .why-fab .why-fab-box {
      width: calc(100% - 0px);
    }

    .why-fab-overlay:before,
    .why-fab-overlay:after {
      width: 90%;
      height: 100%;
    }

    /* ---------CONTACT------------ */
    /*.contact-wrapper .contact {*/
    /*  align-items: center;*/
    /*}*/

    .contact .contact-img {
      max-width: 300px;
      margin-top: 0;
    }


    .contact .contact-img:before {
      width: 250px;
      height: 250px;
    }

    .contact .contact-img:after {
      right: auto;
      left: -55px;
      width: 120px;
      height: 120px;
    }

    /* ----------technology section-------- */
    /*.tech-main .tech-box {*/
    /*    width: calc(50% - 20px);*/
    /*}*/

    /* ----------team section-------- */
    .team-main .team-box {
      width: calc(100% - 0px);
      margin: 15px 0px;
    }

    /* --------TESTIMONIAL SECTION------ */
    .testimonial-main .testimonial-box {
      padding: 40px 20px;
    }

    .testimonial-wrapper:before {
      background-size: 100%;
    }

    /* ---Footer section----- */

    .ftr-main .ftr-col:nth-of-type(2) {
      width: calc(100% - 0px);
      margin: 30px 0 0;
    }

    .ftr-main .ftr-col:nth-of-type(2) a {
      justify-content: center
    }

    .ftr-main .ftr-col:nth-of-type(3) {
      width: calc(100% - 0px);
      margin: 25px 0 0;
    }

    .ftr-main .ftr-col .social-icons {
      justify-content: center;
    }

    .ftr-main .ftr-col .ftr-call a {
      justify-content: center
    }

    .ftr-main .ftr-col:nth-of-type(2) a:first-child {
      max-width: 100%;
    }

    /* --------brand-section || about-page---- */
    .brand-main .brands-box .brand-img {
      margin-right: 12px;
    }

    /* --------STATS section || about-page---- */
    .stats-sec .stats-box {
      width: calc(50% - 0px)
    }

    /* --------FAQ-section || about-page---- */
    .faq-sec:before {
      background-size: 100%;
    }

    /* -----CONTACT-US SECTION ||CONTACT-PAGE---- */
    .contact-p form .input-field {
      width: calc(100% - 0px);
    }

    /* -----EXPERT BANNER SECTION ||CONTACT-PAGE---- */
    .expert-banner .expert-ban {
      background-position: 20% 100%
    }

    .expert-banner .expert-ban .expert-con {
      max-width: 100%;
    }

    .expert-banner .expert-ban .expert-con h4 {
      font-size: 27px;
    }

    /*  ------- contact SECTION | GET HIRED PAGE--- */
    .contact-p.get-hired form .input-field {
      width: calc(100% - 0px);
    }

    .contact-p.get-hired form .address-field .input-field {
      width: calc(100% - 0px)
    }

    /* -------PROCEDURE SEC|| SOFTWARE DEV PAGE----- */
    .procedure-sec {
      padding: 70px 0;
    }

    .procedure-sec .graph-img {
      display: none;
    }

    .procedure-sec .graph {
      margin-top: 80px
    }

    .procedure-sec .graph .phase {
      position: static;
      margin: 40px 0
    }

    .procedure-sec .graph .phase-content {
      max-width: 100%;
      padding: 35px 25px 25px 35px;
    }

    .procedure-sec .graph .phase li {
      font-size: 16px;
      margin: 12px 0;
    }

    .procedure-sec .graph .phase h5 {
      font-size: 18px;
      margin-bottom: 4px;
    }

    .phase-overlay-img {
      top: -27px;
      left: 44%;
    }

    .phase-overlay-img img {
      width: 30px;
      height: 33px;
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    .phase-text {
      display: none;
    }

    /* -------PROCEDURE SEC|| web DEV PAGE----- */
    .procedure-sec.web-pro .graph .phase-content {
      max-width: 100%;
      padding: 35px 15px 15px 25px;
    }

    .procedure-sec .mbl-phase {
      display: block;
    }

    .owner-name-main h4 {
      font-size: 25px;
    }

    .project-sec .project-main .my-priv-arrow,
    .project-sec .project-main .my-next-arrow {
      display: none !important;
    }

    .project-sec .project-slider {
      margin: 0;
    }

    .logo-img {
      max-width: 165px;
    }
    .chatbot-content {
        right:10px;
    }
 .services-content .service-head .h-para,
.about-com-main .about-content p.h-para, 
.about-com-main .about-content h2,
.faq-sec h2{
    font-size: 32px;
    text-align: center;
}
  }

  @media screen and (max-width: 375px) {
    h6 {
      font-size: 18px;
    }

    /* --------------primary-nav---------------- */
    .primary-nav .p-nav-left a {
      font-size: 12px;
    }

    /* ---------------main-nav---------------- */
    .res-con .mbl-chat a {
      padding: 9px 10px
    }

    .main-nav .togg img {
      width: 30px;
      height: 30px;
    }

    .main-nav .togg {
      margin-right: 5px;
    }

    .res-con .mbl-chat a {
      font-size: 12px;
    }

    .mbl-nav {
      width: 100%;
    }

    /* ------------OPTION SECTION------------- */
    .hero h1 {
      font-size: 40px;
    }

    .options-main .option-body p,
    .options-main .option-body h4 {
      text-align: center;
    }

    /* ----------About Company-------- */
    .about-com-main .experience-box:before {
      height: 40px;
    }

    /* -----EXPERT BANNER SECTION ||CONTACT-PAGE---- */
    .expert-banner .expert-ban .expert-con h4 {
      font-size: 24px;
    }

    /*  ------- contact SECTION | GET HIRED PAGE--- */
    .contact-p.get-hired .hero-wrapper .hero-con {
      justify-content: center;
      flex-direction: column;
    }

    .contact-p.get-hired .hero-wrapper .hero-con h1 {
      margin-top: 10px;
    }

    /* -----Software options | SOFTWARE DEV PAGE------- */
    .software-service .options-main .option-body h4 {
      text-align: left;
    }

    .logo-img {
      max-width: 144px;
    }

    .books-sec .services-main .service-con {
      padding: 15px 10px;
    }
    
    .wrapper {
    max-width: 300px;
     width: 100% !important;
}

   .chatbot-content {
   right: 6px;
    /*left: 50%;*/
    /*transform: translateX(-50%);*/
}

  }

  @media screen and (min-width: 376px) {
    .mbl-nav {
      width: 250px !important;
    }

  }

  @media screen and (min-width: 1025px) {
    .mbl-nav {
      display: none !important;
    }
  }
</style>