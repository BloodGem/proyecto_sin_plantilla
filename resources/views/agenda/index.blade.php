<div>
    <div class="row g-0 gy-1">
        <div class="col-3">
            <div class="p-3 border-bottom bg-white">
                <h5 class="m-0 text-secundary">
                    Agenda
                    <span class="badge bg-primary text-white">
                        9 Citas
                    </span>
                </h5>
            </div>
        </div>
        <div class="col-9">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse d-flex flex-wrap align-items-center justify-content-center justify-content-md-between pb-2 px-2 m-0 border-bottom">
                        <ul class="navbar-nav col-12 col-md-auto justify-content-center">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}"
                                    :active="request()->routeIs('dashboard')">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        Diaria
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}"
                                    :active="request()->routeIs('dashboard')">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-people-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            <path fill-rule="evenodd"
                                                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                        </svg>
                                        Diaria global
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <div class="col-md-5 text-end">
                            <div class="btn-group shadow rounded">
                                <button type="button" class="btn btn-primary opacity-75 border border-primary">Dar
                                    cita</button>
                                <button type="button"
                                    class="btn btn-primary opacity-75 border border-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Dar cita</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <x-jet-dropdown-link href="{{-- route('') --}}">
                                        Agendar una cita
                                    </x-jet-dropdown-link>
                                    <x-jet-dropdown-link href="{{-- route('') --}}">
                                        Agendar múltiples citas para el mismo paciente
                                    </x-jet-dropdown-link>
                                </ul>
                            </div>

                            <div class="btn-group shadow rounded">
                                <button type="button" class="btn btn-light border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-calendar-week-fill"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zM2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z">
                                        </path>
                                    </svg>
                                    Fecha
                                </button>
                            </div>

                            <div class="btn-group shadow rounded">
                                <button id="btnGroupDrop1" type="button"
                                    class="btn btn-light border dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                        <path
                                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    </svg>
                                    Imprimir
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <x-jet-dropdown-link href="{{-- route('') --}}">
                                        Hola
                                    </x-jet-dropdown-link>
                                </ul>
                            </div>

                            <div class="btn-group shadow rounded">
                                <button type="button" class="btn btn-light border">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-3">
            <div class="text-center">
                <p class="mb-0 fs-5">Miércoles</p>
                <div class="fs-1 mb-0 fw-bold align-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
                    09
                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
                <p class="mb-0 fs-4">Enero 2022</p>
            </div>
            <div class="p-2">
                <select class="form-select">
                    <option selected>Todos los dentistas</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="list-group">
                <label class="list-group-item border-0">
                    <p class="bg-success d-inline text-success">|</p>
                    <x-jet-checkbox id="marcartodos" name="marcartodos" />
                    <label class="custom-control-label" for="marcartodos">
                        Marcar todos
                    </label>
                </label>
                <hr class="m-0">
                <label class="list-group-item border-0">
                    <p class="bg-danger d-inline text-danger">|</p>
                    <x-jet-checkbox id="noconfirmado" name="noconfirmado" />
                    <label class="custom-control-label" for="noconfirmado">
                        No confirmado
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-info d-inline text-info">|</p>
                    <x-jet-checkbox id="agendaonline" name="agendaonline" />
                    <label class="custom-control-label" for="agendaonline">
                        Agenda Online
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-warning d-inline text-warning">|</p>
                    <x-jet-checkbox id="viaemail" name="viaemail" />
                    <label class="custom-control-label" for="viaemail">
                        Notificado via email
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-black d-inline text-black">|</p>
                    <x-jet-checkbox id="portelefono" name="portelefono" />
                    <label class="custom-control-label" for="portelefono">
                        Confirmado por teléfono
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-light d-inline text-light">|</p>
                    <x-jet-checkbox id="ensala" name="ensala" />
                    <label class="custom-control-label" for="ensala">
                        En sala de espera
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-primary d-inline text-primary">|</p>
                    <x-jet-checkbox id="atendiendose" name="atendiendose" />
                    <label class="custom-control-label" for="atendiendose">
                        Atendiéndose
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-secondary d-inline text-secondary">|</p>
                    <x-jet-checkbox id="atendido" name="atendido" />
                    <label class="custom-control-label" for="atendido">
                        Atendido
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-light d-inline text-light">|</p>
                    <x-jet-checkbox id="noasiste" name="noasiste" />
                    <label class="custom-control-label" for="noasiste">
                        No asiste
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-light d-inline text-light">|</p>
                    <x-jet-checkbox id="enconflicto" name="enconflicto" />
                    <label class="custom-control-label" for="enconflicto">
                        Anulado por sesiones en conflicto
                    </label>
                </label>
                <label class="list-group-item border-0">
                    <p class="bg-light d-inline text-light">|</p>
                    <x-jet-checkbox id="anulado" name="anulado" />
                    <label class="custom-control-label" for="anulado">
                        Anulado
                    </label>
                </label>
            </div>
        </div>
        <div class="col-9">
            <div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Paciente</th>
                                <th>Doctor</th>
                                <th>Estado de la cita</th>
                                <th>Situación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center p-1">
                                    <div class="border-start border-5 border-info">
                                        <div class="bg-success m-1 rounded">
                                            <label class="my-0">09:00
                                                <br>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-arrow-down"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg>
                                                <br>
                                                09:30
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <a href="" class="mb-0 fw-bold text-decoration-none">
                                            Jonathan Alvarado
                                        </a>
                                        <br>
                                        <small class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                            <label class="mb-0">
                                                5559365356 -
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-phone"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg>
                                                5586939159
                                            </label>
                                            <br>
                                            <label class="opacity-50 fw-bold mb-0">BOX 1</label>
                                        </small>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <label>
                                            Dr(a). Fuentealba Gomez
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <ul class="navbar-nav align-items-baseline">
                                            <x-jet-dropdown id="DropdownStatus" class="d-inline">
                                                <x-slot name="trigger">
                                                    No confirmado
                                                    <svg class="ms-2" width="18"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </x-slot>
                                                <x-slot name="content">
                                                    <x-jet-dropdown-link href="{{-- route('') --}}">
                                                        Atendido
                                                    </x-jet-dropdown-link>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        </ul>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <button type="button" class="btn btn-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-activity"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z">
                                                </path>
                                            </svg>
                                            Diagnóstico
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center p-1">
                                    <div class="border-start border-5 border-warning">
                                        <div class="bg-white m-1 rounded">
                                            <label class="my-0">09:00
                                                <br>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor"
                                                    class="bi bi-arrow-down" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg>
                                                <br>
                                                09:30
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <a href="" class="mb-0 fw-bold text-decoration-none">
                                            Jonathan Alvarado
                                        </a>
                                        <br>
                                        <small class="text-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                            <label class="mb-0">
                                                5559365356 -
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" class="bi bi-phone"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                </svg>
                                                5586939159
                                            </label>
                                            <br>
                                            <label class="opacity-50 fw-bold mb-0">BOX 1</label>
                                        </small>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <label>
                                            Dr(a). Fuentealba Gomez
                                        </label>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <ul class="navbar-nav align-items-baseline">
                                            <x-jet-dropdown id="DropdownStatus" class="d-inline">
                                                <x-slot name="trigger">
                                                    <div>
                                                        No confirmado
                                                        <svg class="ms-2" width="18"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </x-slot>
                                                <x-slot name="content">
                                                    <div>
                                                        <x-jet-dropdown-link href="{{-- route('') --}}">
                                                            <div>
                                                                Atendido
                                                            </div>
                                                        </x-jet-dropdown-link>
                                                    </div>
                                                </x-slot>
                                            </x-jet-dropdown>
                                        </ul>
                                    </div>
                                </td>
                                <td class="p-1">
                                    <div>
                                        <button type="button" class="btn btn-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-activity"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z">
                                                </path>
                                            </svg>
                                            Diagnóstico
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" class="border-bottom-0">
                                    <nav>
                                        <ul class="mb-0 pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <a class="page-link">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="#">1</a></li>
                                            <li class="page-item"><a class="page-link"
                                                    href="#">2</a></li>
                                            <li class="page-item"><a class="page-link"
                                                    href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
