{include file="header.tpl"}
    <div class='main'>
        <table class="table table-striped table-dark">
                <tr>
                    <td>Trabajo</td>
                    <td>{$work->work_name}</td>
                </tr>
                <tr>
                    <td>Cliente</td>
                    <td>{$work->client_name}</td>
                </tr>
                <tr>
                    <td>Sector</td>
                    <td>{$work->area}</td>
                </tr>
                <tr>
                    <td>Responsable de area</td>
                    <td>{$work->manager}</td>
                </tr>
                <tr>
                    <td>Estado de trabajo</td>
                    <td>{$work->work_status}</td>
                </tr>
                <tr>
                    <td>Descripcion</td>
                    <td>{$work->work_description}</td>
                </tr>
        </table>
    </div>
{include file="footer.tpl"}