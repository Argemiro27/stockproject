<!DOCTYPE html>
<html>
    <head>
        <title>Cotação da PETR4</title>
    </head>
    <body>
        <h1>Cotação da PETR4</h1>
        @if ($price)
            <p>O preço atual da PETR4 é R$ {{ $price }}</p>
        @else
            <p>Não foi possível obter a cotação da PETR4.</p>
        @endif
    </body>
</html>
