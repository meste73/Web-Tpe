{if {$name}}
    <div class="form">
        <h3>Agregar sector</h3>
        <form action="addSector" method="post">
            <label for="">Sector</label>
            <input type="text" name="area" class="form-control" required>
            <label for="">Responsable</label>
            <input type="text" name="manager" class="form-control" required>
            <button type="submit" class="btn btn-outline-secondary height">Enviar</button>
        </form>
    </div>
{/if}