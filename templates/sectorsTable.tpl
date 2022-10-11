{include file="header.tpl"}
    <table class="table table-striped">
        <tr>
            <td>Sector</td>
            <td>Encargado</td>
            {if {$name}}
                <td></td>
                <td></td>
            {/if}
        </tr>
        {foreach $sectors as $sector}
            <tr>
                <td><a href='works/{$sector->id}'>{$sector->area}</a></td>
                <td>{$sector->manager}</td>
                {if {$name}}
                    <td><a href='updateSector/{$sector->id}' type='button' class='btn btn-danger ml-auto'>Modificar</a></td>
                    <td><a href='deleteSector/{$sector->id}' type='button' class='btn btn-danger ml-auto'>Borrar</a></td>
                {/if}
            </tr>
        {/foreach}
    </table>
    <div class="row">
        {include file="addSectorForm.tpl"}
    </div>
{include file="footer.tpl"}