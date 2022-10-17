{include file="header.tpl"}
    <div class="p-3 mb-2 bg-dark text-white form rounded">
        <h3>Modificar sector</h3>
        <form action="sectorUpdated/{$sector->id}" method="post">
            <label for="">Trabajo</label>
            <input type="text" name="area" class="form-control" value="{$sector->area}" required>
            <label for="">Descripcion</label>
            <input type="text" name="manager" class="form-control" value="{$sector->manager}" required>        
            <button type="submit" class="btn btn-light mt-3">Modificar</button>
        </form>
    </div>
{include file="footer.tpl"}