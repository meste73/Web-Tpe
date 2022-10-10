{include file="header.tpl"}
    <div class="form">
        <h3>Modificar sector</h3>
        <form action="sectorUpdated/{$sector->id}" method="post">
            <label for="">Trabajo</label>
            <input type="text" name="area" class="form-control" value="{$sector->area}" required>
            <label for="">Descripcion</label>
            <input type="text" name="manager" class="form-control" value="{$sector->manager}" required>        
            <button type="submit" class="btn btn-outline-secondary height">Modificar</button>
        </form>
    </div>
{include file="footer.tpl"}