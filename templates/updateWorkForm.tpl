{include file="header.tpl"}
    <div class="form">
        <h3>Modificar trabajo</h3>
        <form action="updatedWork/{$work->id}" method="post">
            <label for="">Trabajo</label>
            <input type="text" name="work_name" class="form-control" value="{$work->work_name}" required>
            <label for="">Descripcion</label>
            <input type="text" name="work_description" class="form-control" value="{$work->work_description}" required>
            <label for="">Cliente</label>
            <input type="text" name="client_name" class="form-control" value="{$work->client_name}" required>
            <label for="">Numero Trabajo</label>
            <input type="text" name="work_id" class="form-control" value="{$work->work_id}" required>
            <label for="">Estado</label>
            <input type="text" name="work_status" class="form-control" value="{$work->work_status}" required>
            <label for="">Seleccionar sector</label>
            <select name="area" id="" class="form-control">
                {foreach $sectors as $sector}
                    {if {$sector->id} == {$work->fk_id}}
                        <option value="{$sector->id}" selected>{$sector->area}</option>
                    {else}
                        <option value="{$sector->id}">{$sector->area}</option>
                    {/if}
                {/foreach}
            </select>
            <button type="submit" class="btn btn-outline-secondary height">Modificar</button>
        </form>
    </div>
{include file="footer.tpl"}