<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Mestelan Cajas de Velocidades</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">Servicio Mecanico Mestelan</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="works" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Trabajos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="works">Todos</a></li>
                                    {foreach $sectors as $sector}
                                        <li><a class="dropdown-item" href="works/{$sector->id}">{$sector->area}</a></li>
                                    {/foreach}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sectors">Sectores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">Sobre nosotros</a>
                        </li>
                    </ul>
                    {if {!$name}}
                        <form action="login" method="POST" class="d-flex login">
                        <div>
                        <label for="">Usuario</label>
                        <input class="form-control me-2" type="text" name="email" id="" placeholder="Ingrese email" required>
                        </div>
                        <div>
                        <label for="">Contraseña</label>
                        <input class="form-control me-2" type="password" name="password" id="" placeholder="Ingrese contraseña" required>
                        </div>
                        <div class="buttonSearch">
                        <button class="btn btn-outline-secondary height" type="submit">Login</button>
                        </div>
                        </form>
                    {else}
                        <div><span>{$name} ---></span></div>
                        <a class="mr-5" href="logout">Logout</a>
                    {/if}
                </div>
            </div>
        </nav>
    </header>
    <div class="master">