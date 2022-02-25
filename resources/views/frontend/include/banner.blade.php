<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 420px;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
 
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  
  background: #776ad5;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 23%;
  margin-top:160px;
  margin-left: 30px !important;
  transform: translate(-50%, -50%);
}
</style>
<section class="main-banner-wrap-layout1 bg-gradient-layout1 has-animation">
    <ul class="animated-figure">
        <li>
            <div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
                <svg width="678px" height="575px">
                    <defs>
                        <linearGradient id="shape-gradient1" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21" />
                            <stop offset="100%" stop-color="rgb(104,2,198)" stop-opacity="0.21" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape-gradient1)" d="M8.774,72.637 C24.335,32.328 64.598,1.818 107.846,0.977 C153.529,0.088 193.846,29.308 228.367,59.201 C262.888,89.095 297.864,122.295 342.435,132.337 C395.990,144.404 451.255,120.277 506.077,123.221 C581.185,127.255 647.967,185.940 669.010,258.060 C690.054,330.177 668.236,411.294 619.856,468.811 C571.474,526.325 499.170,561.071 424.701,571.631 C341.448,583.438 251.586,564.649 188.145,509.531 C153.304,479.260 128.229,437.550 117.609,392.681 C109.183,357.083 116.362,318.069 105.755,283.272 C94.490,246.320 59.108,232.772 35.167,205.579 C3.816,169.968 -8.566,117.557 8.774,72.637 Z" />
                </svg>
            </div>
        </li>
        <li>
            <div class="translate-right-75 opacity-animation transition-200 transition-delay-500">
                <svg width="478px" height="406px">
                    <defs>
                        <linearGradient id="shape-gradient2" x1="0%" x2="50%" y1="86.603%" y2="0%">
                            <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21" />
                            <stop offset="100%" stop-color="rgb(141,34,240)" stop-opacity="0.21" />
                        </linearGradient>
                    </defs>
                    <path fill="url(#shape-gradient2)" d="M57.512,28.844 C41.937,43.215 29.659,61.585 21.596,80.726 C10.238,107.690 5.415,136.934 2.113,166.013 C-8.559,260.013 20.528,368.419 121.400,397.331 C189.062,416.723 262.433,396.867 324.343,368.126 C415.304,325.900 543.497,194.454 436.347,96.738 C378.745,44.207 285.697,64.026 217.602,35.418 C185.699,22.011 155.662,-2.674 119.276,0.267 C95.545,2.187 74.555,13.118 57.512,28.844 Z" />
                </svg>
            </div>
        </li>
    </ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 order-lg-2 align-items-center justify-content-center d-none d-lg-block">
                <div class="translate-right-75 opacity-animation transition-150 transition-delay-2600">
                    <div class="main-banner-box-layout1">
                        <div class="item-figure ">
                            <img src="media/illustration/illustration1.png" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 order-lg-1 compress-left-side d-flex align-items-center banner-text" >
                <div class="main-banner-box-layout1">
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1500">
                        <div class="item-sub-title">We are looking for One real estate agent per city.</div>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1800">
                        <h1 class="item-main-title">For Brokers <br> By Brokers </h1>
                    </div>
                </div>
                <div>
                    <div class="wrap wrapp" style="">
                        <div class="search translate-bottom-75 opacity-animation transition-150 transition-delay-1500">
                            <input type="text" class="searchTerm" placeholder="What are you looking for?">
                            <button type="submit" class="searchButton">
                               <a href="{{url('log_in')}}">
                               <i class="fa fa-search" style="color:white;"></i>
                               </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>