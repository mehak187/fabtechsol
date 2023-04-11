<style>
    /* ----------admin-tbls---- */
.contact-details-sec {
    background: var(--blue-dark2);
    padding: 70px 0
}

.contact-details-sec h4 {
    text-align:center
}
.res-tbl{
    overflow-x: auto
}

.res-tbl table {
    width: 100%;
    margin-top:10px;
    border-collapse: collapse
}

.res-tbl table td,
.res-tbl table th {
    padding: 15px 20px;
    vertical-align: top;
    text-align:left;
    line-height: 1.2;
}

.res-tbl table td a {
    width:max-content;
    background: var(--blue-sky);
    border: 2px solid var(--blue-sky);
    border-radius: 5px;
    padding: 8px 13px;;
    text-decoration: none;
    display: block;
    line-height: 1;
    color: #fff;
    text-align:center;
}

.res-tbl table td a:hover {
    background: transparent
}

.res-tbl table td .del-can {
    background: rgb(194,5,5);
        border: 2px solid rgb(194,5,5);
}

.res-tbl table td a:hover {
    text-decoration:none;
}

.res-tbl table td {
    border: 1px solid #fff;
    color: #fff;
    font-size:14px;
    text-transform: capitalize;
}
.res-tbl table th {
    font-size:16px;
    color: #fff;
    background: #fff;
    color:var(--blue-dark2);
    border: 1px solid var(--blue-dark2);
}

.res-tbl table th:first-child {
    border-left: 1px solid #fff;
}

.res-tbl table th:last-child {
    border-right: 1px solid #fff;
}
.res-tbl thead {
    background: #0F172B 
}

.res-tbl .btn>a{
    background: #0F172B;
    color: #fff;
    padding: 10px 20px;
    border-radius: 8px;
    display: block;
    border: 2px solid #0F172B;
    font-size: 16px;
    transition: all 0.3s;
    text-transform: capitalize;
}

.res-tbl .btn>a:hover {
    opacity: 0.9;
}

.res-tbl td img {
    width: 60px;
    height: 60px;
    object-fit: cover
}

.res-tbl td>.btn {
    display: block;
}

.res-tbl td>.btn a {
    color: #fff;
    padding: 5px 10px;
    display: block;
    max-width: 80px;
    font-size: 14px;
    border-radius: 4px;
}

.res-tbl td .btn-up>a {
    background: green;
    border: 2px solid green;
}

.res-tbl td .btn-del>a {
    background: red;
        border: 2px solid red;
}

.res-tbl td .btn-up>a:hover {
    background: transparent;
    opacity: 1;
    color: green
}

.res-tbl td .btn-del>a:hover {
    background: transparent;
    opacity: 1;
    color: red;
}

.tbl-main {
    max-width:1200px;
    overflow: auto
}

/* ------default scrollbar------ */
.res-tbl {
    padding: 30px 0;
}

.res-tbl::-webkit-scrollbar {
    width: 4px;
    height: 14px;
}

.res-tbl::-webkit-scrollbar-track {
        border-radius: 8px;
        background: var(--grey-1);
}

.res-tbl::-webkit-scrollbar-thumb {
        background: var(--blue-sky);
    border-radius: 8px;
}

.no-record {
    margin-top:30px;
    display:flex;
    align-items: center;
    border: 1px solid var(--grey-1);
    padding: 7px 7px; 
    border-radius: 7px;
}

.no-record img {
    margin-right: 10px;
    width: 40px;
    height: 40px
}

.no-record h6 {
  font-size: 25px
}

.con-det-top {
    display:flex;
    align-items: center;
    justify-content: center;
}

.admin-home {
    max-width: 450px;
    margin: 20px auto;
    background: var(--blue-sky);
    border-radius: 10px;
    padding: 30px 50px;
}

.admin-home .blue-btn {
    margin: 10px 0;
}

.admin-home .blue-btn a {
    background: var(--blue-dark);
    border: 2px solid var(--blue-dark);
    padding: 16px 15px;
    text-align: center;
    border-radius: 8px;
    font-size: 16px
}

.admin-home .blue-btn a:hover {
    background: rgba(255,255,255,0.7);
    color: var(--blue-dark);
}

.add-more img{
    width: 30px;
        height:30px;
    background: var(--blue-sky);
    border-radius: 20px;
    padding: 6px;
    Cursor: pointer;
}

.add-more {
    margin-top: 15px;
    text-align: right;
}

.add-news .field select {
    color: #fff;
    border: 2px solid var(--blue-light);
    background: var(--blue-dark);
    padding: 15px 10px;
    margin-top: 5px;
    border-radius: 8px;
    font-size: 16px;
}

.add-more {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    color: #fff;
    font-size: 20px;
}

.add-more img {
    margin-left: 10px;    
}

</style>