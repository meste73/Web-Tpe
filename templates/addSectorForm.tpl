{if {$name}}
    <div class="p-3 mb-2 bg-dark text-white form rounded">
        <h3>Agregar sector</h3>
        <form action="addSector" method="post">
            <label for="">Sector</label>
            <input type="text" name="area" class="form-control" required>
            <label for="">Responsable</label>
            <input type="text" name="manager" class="form-control" required>
            <button type="submit" class="btn btn-light mt-3">Enviar</button>
        </form>
    </div>
{/if}