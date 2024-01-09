<x-layout title="Reservar Vaga">

    <div class="d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/logoSlim.png') }}" class="mb-5" alt="logo" width="100px" height="100">
    </div>

    <h1 class="fs-4 text-secondary fw-bold my-4 line">Comprar Vaga</h1>

    <form action="{{ route('lots.store') }}" method="post">
        @csrf

        <div class="row">

            <div class="col-12 col-sm-6 d-flex flex-column mb-4">

                <div class="col-12 mb-3">

                    <label class="form-label" for="address">Endereço</label>

                    <input class="form-control" list="placeList" id="address" name="address"
                        placeholder="Selecione um lugar" required>

                    <datalist id="placeList">
                        @foreach ($placeList as $place)
                            <option value="{{ $place->address }}">{{ $place->name }}</option>
                            <input type="text" hidden id="coordenates" name="coordenates" value="{{ $place->coordenates }}">
                            <input type="text" hidden id="place" name="place" value="{{ $place->name }}">
                        @endforeach
                    </datalist>

                </div>

                <div class="col-12 mb-3">

                    <label class="form-label" for="date">Data</label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="Data"
                        value="{{ old('date') }}" required>

                </div>

                <div class="col-12">

                    <label class="form-label" for="time">Horário</label>

                    <input type="time" class="form-control" id="time" name="time"
                        placeholder="Que Horas?" required>

                </div>

                <div class="col-12">

                    <label class="form-label" for="interval">Intervalo</label>

                    <input class="form-control" list="intervalList" id="interval" name="interval"
                        placeholder="Pra quanto tempo?" required>

                    <datalist id="intervalList">
                        <option value="30 Minutos">
                        <option value="1 hora">
                        <option value="1 hora e meia">
                        <option value="2 horas">
                        <option value="2 hora e meia">
                        <option value="3 horas">
                        <option value="3 hora e meia">
                        <option value="Evento">
                    </datalist>

                </div>

            </div>

            <div class="col-12 col-sm-6 mb-5">
                <div class="d-flex flex-column border-secondary border-1 border p-4 rounded-2">
                    <h1 class="fs-5 fw-bold text-success">Valor da Reserva</h1>
                    <p>Valor da Vaga: R$ 5,00</p>
                    <p>Impostos: R$ 00,75</p>
                    <p>Valor Total: R$5,75</p>
                    <button class="btn btn-success px-3" type="submit" style="max-width: fit-content;">
                        Adquirir Vaga
                    </button>
                </div>
            </div>
        </div>

        <input type="text" hidden id="value" name="value" value="R$5,75">
        <input type="number" hidden id="user_id" name="user_id" value="0">
    </form>
</x-layout>
