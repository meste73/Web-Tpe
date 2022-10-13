{if {$name}}
    <div class="form">
        <h3>Agregar trabajo</h3>
        <form action="addWork" method="post">
            <label for="">Trabajo</label>
            <input type="text" name="work_name" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" name="work_description" class="form-control" required>
            <label for="">Cliente</label>
            <input type="text" name="client_name" class="form-control" required>
            <label for="">Numero Trabajo</label>
            <input type="text" name="work_id" class="form-control" required>
            <label for="">Estado</label>
            <input type="text" name="work_status" class="form-control" required>
            <label for="">Seleccionar sector</label>
            <select name="area" id="" class="form-select">
                {foreach $sectors as $sector}
                    <option value="{$sector->id}">{$sector->area}</option>
                {/foreach}
            </select>
            <button type="submit" class="btn btn-outline-secondary height">Enviar</button>
        </form>
    </div>
{/if}