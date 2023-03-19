
<footer class="text-center text-white greentodarkgreen">

    <div class="container p-4">
        <div class="row my-4">
            <div class="col-12 col-md-6">
                <div class="row">
                    <h4 class="text-light text-start mt-2 mb-4">{{__('Pagrindinis meniu')}}</h4>
                    <div class="col-12 col-md-6 text-start">
                        <div class="d-flex justify-content-start align-items-start flex-column">
                            <div>
                                <a class="text-light text-decoration-none" href="{{route('home')}}">{{__('Pradžia')}}</a>
                            </div>
                            <div>
                                <a class="text-light text-decoration-none" href="{{route('rental.index')}}">{{__('Nuomojami
                                    automobiliai')}}</a>
                            </div>
                            <div>
                                <a class="text-light text-decoration-none" href="{{route('category.index')}}">{{__('Automobilių
                                    kategorijos')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex justify-content-start align-items-start flex-column">
                            <div>
                                <a class="text-light text-decoration-none" href="{{route('contacts')}}">{{__('Kontaktai')}}</a>
                            </div>
                            <div>
                                <a class="text-light text-decoration-none" href="">{{__('Apie mus')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">

                <div class="row">
                    <h4 class="text-light text-start mt-2 mb-4">{{__('Kontaktinė informacija')}}</h4>
                    <div class="col-12 d-flex justify-content-start align-items-start flex-column">
                        <div>
                            <div>
                                <i class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </i>
                                info@autorent.lt
                            </div>
                            <div>
                                <i class="me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                </i>
                                +37067777777
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <hr class="hr hr-blurry"/>
    <div class="text-center text-light pb-3">
        © 2023 Copyright:
        <a class="text-light text-decoration-none">Auto<span style="color: #48bb78">Rent</span></a>
    </div>

</footer>

