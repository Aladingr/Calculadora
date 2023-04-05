<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Calc</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<body>
<div class="container p-3 my-3 border">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        CALCULADORA
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('procesar') }}">  
                            @csrf
                            <div class="form-group">
                                <label for="num1">NUMERO 1:</label>
                                <input type="float" class="form-control" id="num1" name="num1">
                            </div>
                            <div class="form-group">
                                <label for="num2">NUMERO 2:</label>
                                <input type="float" class="form-control" id="num2" name="num2">
                            </div>
                            <div class="form-group">
                                <label for="operator">OPERADOR:</label>
                                <select class="form-control" id="operator" name="operator">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                    <option value="√">√</option>
                                </select>
                            </div>
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary" id="calculate">Calcular</button>
                            </div>
                            <div class="form-group">
                                <label for="result">Resultado:</label>
                                <input type="text" class="form-control" id="resultado" name="resultado" value="{{ $resultado }}" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>