<div class="contenedor">
    <div class="titular">
        <h4>{{ $obracivil ?? 'No disponible' }}</h4>
        <small>{{ $obracivildescripcion ?? 'No disponible' }}</small>
    </div>

    <div class="informacion">
        <div class="bullet">
            <h5>{{ $tipodeproyecto ?? 'No disponible' }}</h5>
            <small>PROYECTO</small>
        </div>

        <div class="bullet">
            <h5>{{ $lugarobra ?? 'No disponible' }}</h5>
            <small>Locación</small>
        </div>
    </div>

    <div class="botoncta">
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Descargar curriculum
            <span class="m-auto"><img src="{{ asset('img/arrow-right.svg') }}" width="25" alt=""></span>
        </button>
    </div>
</div>
