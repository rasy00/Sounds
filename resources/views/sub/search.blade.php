@extends("sub.layouts.master")

@section("konten")
<section class="search_section">
    <div class="search_container">
        <div class="search_headline">
            <div class="search_tool_group">
                <form action="/sounds/search/results" method="get">
                    @csrf
                    <input type="text" name="search_name" id="search">
                    <label for="search">
                        <button type="submit">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M22.8875 21.1125L18.6375 16.875C20.0087 15.1281 20.7528 12.9708 20.75 10.75C20.75 8.77219 20.1635 6.83879 19.0647 5.1943C17.9659 3.54981 16.4041 2.26809 14.5768 1.51121C12.7496 0.754333 10.7389 0.556299 8.7991 0.942152C6.85929 1.328 5.07746 2.28041 3.67894 3.67894C2.28041 5.07746 1.328 6.85929 0.942152 8.7991C0.556299 10.7389 0.754333 12.7496 1.51121 14.5768C2.26809 16.4041 3.54981 17.9659 5.1943 19.0647C6.83879 20.1635 8.77219 20.75 10.75 20.75C12.9708 20.7528 15.1281 20.0087 16.875 18.6375L21.1125 22.8875C21.2287 23.0047 21.367 23.0977 21.5193 23.1611C21.6716 23.2246 21.835 23.2573 22 23.2573C22.165 23.2573 22.3284 23.2246 22.4807 23.1611C22.633 23.0977 22.7713 23.0047 22.8875 22.8875C23.0047 22.7713 23.0977 22.633 23.1611 22.4807C23.2246 22.3284 23.2573 22.165 23.2573 22C23.2573 21.835 23.2246 21.6716 23.1611 21.5193C23.0977 21.367 23.0047 21.2287 22.8875 21.1125ZM3.25 10.75C3.25 9.26664 3.68987 7.8166 4.51398 6.58323C5.33809 5.34986 6.50943 4.38857 7.87988 3.82091C9.25033 3.25325 10.7583 3.10473 12.2132 3.39411C13.668 3.6835 15.0044 4.39781 16.0533 5.4467C17.1022 6.4956 17.8165 7.83197 18.1059 9.28683C18.3953 10.7417 18.2468 12.2497 17.6791 13.6201C17.1114 14.9906 16.1502 16.1619 14.9168 16.986C13.6834 17.8101 12.2334 18.25 10.75 18.25C8.76088 18.25 6.85323 17.4598 5.4467 16.0533C4.04018 14.6468 3.25 12.7391 3.25 10.75Z" 
                            fill="white"/>
                            </svg> 
                        </button>
                    </label>
                    
                </form>
                <span id="result_search">Hasil yang ditemukan : @if($req->input("search_name") == "")
                                                                    xxxxx
                                                                @else
                                                                    {{$req->input("search_name")}}
                                                                @endif
                </span>
            </div>
            <div class="info-section">
                <div class="grid-option-container">
                    <button class="grid-list active" data-grid='list'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                            <path d="M2 17.6667H25M1 1H26V26H1V1ZM8 2.19048V24.8095V2.19048ZM2 9.33333H25H2Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="grid-3-card" data-grid='tColoumns'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 25 25" fill="none">
                            <rect width="7.14271" height="7.14294" fill="black"/>
                            <rect x="8.92798" width="7.14271" height="7.14294" fill="black"/>
                            <rect x="17.8574" width="7.14271" height="7.14294" fill="black"/>
                            <rect x="17.8574" y="8.92871" width="7.14271" height="7.14294" fill="black"/>
                            <rect x="8.92798" y="8.92871" width="7.14271" height="7.14294" fill="black"/>
                            <rect y="8.92883" width="7.14271" height="7.14294" fill="black"/>
                            <rect y="17.8571" width="7.14271" height="7.14294" fill="black"/>
                            <rect x="8.92798" y="17.8569" width="7.14271" height="7.14294" fill="black"/>
                            <rect x="17.8574" y="17.8569" width="7.14271" height="7.14294" fill="black"/>
                        </svg>
                    </button>
                </div> 
            </div>
        </div>
        <div class="search_container_inner">
            <div class="search_inner">
                <div class="search_inner_main">
                    <div class="episodes-container grid-list">
                        @for ($i = 1; $i <= 12; $i++)
                            <a href="#" class="episode-item">
                                <div class="cover">
                                    <img src="../../assets/resources/photos/tos.jpeg" alt="jhsd" height="200" width="200" srcset="../../assets/resources/photos/tos.jpeg"> 
                                </div>
                                <div class="gel"></div>
                                <div class="data">
                                    <span class="judul">MG Radio Network</span>
                                    <span class="summ">Setelah Jokowi Bertemu Zelensky dan Putin, What Next?</span>
                                    <span class="duration-release">64 Min | 06 Jul 2022</span>
                                </div>
                            </a>
                        @endfor
                    </div>
                </div>
                <div class="search_inner_recommend">
                    <span class="recommend_sign">Rekomendasi</span>
                    <div class="recommend_container">
                        <a href="#" class="recommend_item">
                            <div class="cover">
                                <img src="../../assets/resources/photos/tos.jpeg" alt="jhsd" height="200" width="200" srcset="../../assets/resources/photos/tos.jpeg"> 
                            </div>
                            <div class="gel"></div>
                            <div class="data">
                                <span class="program_name">MG Radio Network</span>
                                <span class="judul">Filipina Masa Kini | Ft. Letjen TNI (Purn.) Agus Widjojo</span>
                                <span class="duration-release">64 Min | 06 Jul 2022</span>
                            </div>
                        </a>
                        <a href="#" class="recommend_item">
                            <div class="cover">
                                <img src="../../assets/resources/photos/tos.jpeg" alt="jhsd" height="200" width="200" srcset="../../assets/resources/photos/tos.jpeg"> 
                            </div>
                            <div class="gel"></div>
                            <div class="data">
                                <span class="program_name">MG Radio Network</span>
                                <span class="judul">Filipina Masa Kini | Ft. Letjen TNI (Purn.) Agus Widjojo </span>
                                <span class="duration-release">64 Min | 06 Jul 2022</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>  
            <div class="pagination">
                <button class="first-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 14 15" fill="none">
                        <path d="M12.8299 15C12.6805 15.0005 12.5329 14.9676 12.3979 14.9035C12.263 14.8395 12.144 14.7461 12.0499 14.63L7.21992 8.63003C7.07284 8.4511 6.99243 8.22666 6.99243 7.99503C6.99243 7.76341 7.07284 7.53896 7.21992 7.36003L12.2199 1.36003C12.3897 1.15581 12.6336 1.02739 12.898 1.00301C13.1624 0.978631 13.4257 1.06029 13.6299 1.23003C13.8341 1.39977 13.9626 1.64368 13.9869 1.90811C14.0113 2.17253 13.9297 2.43581 13.7599 2.64003L9.28992 8.00003L13.6099 13.36C13.7322 13.5068 13.8099 13.6856 13.8338 13.8751C13.8576 14.0647 13.8267 14.2571 13.7447 14.4296C13.6626 14.6021 13.5328 14.7475 13.3707 14.8486C13.2086 14.9497 13.021 15.0023 12.8299 15Z" fill="white"/>
                        <path d="M6.82992 15C6.68052 15.0005 6.53291 14.9676 6.39794 14.9035C6.26296 14.8395 6.14404 14.7461 6.04992 14.63L1.21992 8.63003C1.07284 8.4511 0.992432 8.22666 0.992432 7.99503C0.992432 7.76341 1.07284 7.53896 1.21992 7.36003L6.21992 1.36003C6.38966 1.15581 6.63357 1.02739 6.898 1.00301C7.16242 0.978631 7.4257 1.06029 7.62992 1.23003C7.83414 1.39977 7.96256 1.64368 7.98694 1.90811C8.01132 2.17253 7.92966 2.43581 7.75992 2.64003L3.28992 8.00003L7.60992 13.36C7.7322 13.5068 7.80988 13.6856 7.83376 13.8751C7.85764 14.0647 7.82672 14.2571 7.74467 14.4296C7.66261 14.6021 7.53285 14.7475 7.37074 14.8486C7.20863 14.9497 7.02095 15.0023 6.82992 15Z" fill="white"/>
                    </svg>
                </button>
                <button class="previous-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                        <path d="M6.82992 14.7917C6.68052 14.7922 6.53291 14.7579 6.39794 14.6912C6.26296 14.6245 6.14404 14.5271 6.04992 14.4063L1.21992 8.15625C1.07284 7.96986 0.992432 7.73607 0.992432 7.49479C0.992432 7.25352 1.07284 7.01972 1.21992 6.83333L6.21992 0.583336C6.38966 0.37061 6.63357 0.236835 6.898 0.211439C7.16242 0.186044 7.4257 0.271108 7.62992 0.447919C7.83414 0.62473 7.96256 0.878804 7.98694 1.15425C8.01132 1.42969 7.92966 1.70394 7.75992 1.91667L3.28992 7.5L7.60992 13.0833C7.7322 13.2362 7.80988 13.4224 7.83376 13.6199C7.85764 13.8173 7.82672 14.0178 7.74467 14.1975C7.66261 14.3772 7.53285 14.5287 7.37074 14.634C7.20863 14.7393 7.02095 14.794 6.82992 14.7917Z" fill="white"/>
                    </svg>
                </button>
                <div class="another-page">
                    @for ($i = 1; $i <= 3; $i++)    
                        <button class="page-item">{{$i}}</button>
                    @endfor
                </div>
                <button class="next-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                        <path d="M1.17008 -3.09609e-05C1.31947 -0.000539282 1.46708 0.032433 1.60206 0.0964618C1.73704 0.16049 1.85596 0.25395 1.95008 0.36997L6.78008 6.36997C6.92716 6.5489 7.00757 6.77334 7.00757 7.00497C7.00757 7.23659 6.92716 7.46104 6.78008 7.63997L1.78008 13.64C1.61034 13.8442 1.36643 13.9726 1.102 13.997C0.837578 14.0214 0.574297 13.9397 0.37008 13.77C0.165864 13.6002 0.0374398 13.3563 0.01306 13.0919C-0.0113197 12.8275 0.0703415 12.5642 0.24008 12.36L4.71008 6.99997L0.39008 1.63997C0.267797 1.49318 0.19012 1.31444 0.16624 1.12489C0.14236 0.935346 0.173277 0.742921 0.255333 0.570394C0.337389 0.397867 0.467149 0.252455 0.629259 0.151365C0.79137 0.0502744 0.979046 -0.00226254 1.17008 -3.09609e-05Z" fill="white"/>
                    </svg>
                </button>
                <button class="last-page">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 14 15" fill="none">
                        <path d="M1.17008 -5.38491e-05C1.31947 -0.000562171 1.46708 0.0324102 1.60206 0.0964389C1.73704 0.160468 1.85596 0.253927 1.95008 0.369947L6.78008 6.36995C6.92716 6.54888 7.00757 6.77332 7.00757 7.00495C7.00757 7.23657 6.92716 7.46101 6.78008 7.63995L1.78008 13.6399C1.61034 13.8442 1.36643 13.9726 1.102 13.997C0.837578 14.0213 0.574297 13.9397 0.37008 13.7699C0.165864 13.6002 0.0374398 13.3563 0.01306 13.0919C-0.0113197 12.8274 0.0703415 12.5642 0.24008 12.3599L4.71008 6.99995L0.39008 1.63995C0.267797 1.49316 0.19012 1.31442 0.16624 1.12487C0.14236 0.935323 0.173277 0.742899 0.255333 0.570371C0.337389 0.397844 0.467149 0.252432 0.629259 0.151342C0.79137 0.0502516 0.979046 -0.00228543 1.17008 -5.38491e-05Z" fill="white"/>
                        <path d="M6.17008 -5.38491e-05C6.31947 -0.000562171 6.46708 0.0324102 6.60206 0.0964389C6.73704 0.160468 6.85596 0.253927 6.95008 0.369947L11.7801 6.36995C11.9272 6.54888 12.0076 6.77332 12.0076 7.00495C12.0076 7.23657 11.9272 7.46101 11.7801 7.63995L6.78008 13.6399C6.61034 13.8442 6.36643 13.9726 6.102 13.997C5.83758 14.0213 5.5743 13.9397 5.37008 13.7699C5.16586 13.6002 5.03744 13.3563 5.01306 13.0919C4.98868 12.8274 5.07034 12.5642 5.24008 12.3599L9.71008 6.99995L5.39008 1.63995C5.2678 1.49316 5.19012 1.31442 5.16624 1.12487C5.14236 0.935323 5.17328 0.742899 5.25533 0.570371C5.33739 0.397844 5.46715 0.252432 5.62926 0.151342C5.79137 0.0502516 5.97905 -0.00228543 6.17008 -5.38491e-05Z" fill="white"/>
                    </svg>
                </button>
            </div> 
        </div>
        
    </div>
</section>
@endsection