{include file="header.tpl"}
    <table class='table table-striped'>
        <tr>
            <td>Trabajo</td>
            <td>Descripcion</td>
            <td>Cliente</td>
            <td>Estado</td>
            <td>Sector</td>
            <td>Responsable</td>
            {if {$name}}
                <td></td>
                <td></td>
            {/if}
        </tr>
        {foreach $works as $work}
            <tr>
                <td><a href='detail/{$work->work_id}'>{$work->work_name}</a></td>
                <td>{$work->work_description|truncate:35}</td>
                <td>{$work->client_name}</td>
                <td>{$work->work_status}</td>
                <td>{$work->area}</td>
                <td>{$work->manager}</td>
                {if {$name}}
                    <td><a href='updateWork/{$work->id}' type='button' class='btn btn-danger ml-auto'>Modificar</a></td>
                    <td><a href='deleteWork/{$work->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a></td>
                {/if}
            </tr>
        {/foreach}
    </table>
    <div class="row">
        {include file="addWorkForm.tpl"}
    </div>
{include file="footer.tpl"}