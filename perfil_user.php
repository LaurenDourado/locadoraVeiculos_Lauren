<?php
// Backend
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADM - Locadora de veículos</title>
  <link rel="stylesheet" href="style.css">
  <!-- Link do bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Link dos ícones -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- CSS Interno -->
  <style></style>

</head>
<body class="container py-4">
    <div class="container py-4">
    <!-- barra de informações de usuário -->
     <div class="row mb-4">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center inicio">
                <h1>Sistema de Locadora de Veículos</h1>
                <div class="d-flex align-items-center gap-3 user-info mx-3">
                    <span class="user-icon">
                        <i class="bi bi-person-circle" style="font-size:24px;"></i>
                    </span>

                    <!-- Bem vindo, [usuário] -->
                     <span class="welcome-text">
                        Bem-vindo, <strong>Usuário</strong>!
                     </span>

                     <!-- botão de logout -->
                      <a href="" class="btn btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                    </a>
                </div>
            </div>
        </div>
     </div>
     <!-- previsão de aluguel -->
        <div class="col">
            <div class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0">
                        Calcular a previsão de aluguel 💰
                    </h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tipo" class="input-label">
                                Tipo de veículo:
                            </label>
                            <select  class="form-select" name="tipo" id="tipo" 
                            required>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                                <option value="caminhao">Caminhão</option>
                                <option value="aviao">Avião</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade de dias 📆:</label>
                            <input type="number" class="form-control" name="dias_calculo" value="1" required>
                        </div>
                        <button class="btn btn-success w-100" type="submit" 
                        name="calcular">
                            Calcular
                        </button>
                    </form>
                </div>
            </div>
        </div>
     </div>
     <!-- tabela de veiculos cadastrados -->
     <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        Veículos Cadastrados 🧾
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>Tipo</th>
                                <th>Modelo</th>
                                <th>Placa</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Carro</td>
                                    <td>
                                        <span>
                                            <button class="btn btn-success p-0" data-bs-toggle="modal" data-bs-target="#uno">Fiat Uno</button>
                                        </span>
                                    </td>
                                       
                                    <td>ABC1D34</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível ✅
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Moto</td>
                                    <td>
                                        <span>
                                            <button class="btn btn-success p-0" data-bs-toggle="modal" data-bs-target="#modalcorsaclassic">Ninja</button>
                                        </span>
                                    </td>
                                    <td>AAA1B23</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado ⚠️
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Carro</td>
                                    <td>T-CROSS</td>
                                    <td>BBB1C23</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado ⚠️
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Moto</td>
                                    <td>Scooter</td>
                                    <td>CCC1D23</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível ✅
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
<!-- Modal -->
<div class="modal fade" id="uno" tabindex="-1" aria-labelledby="unoLabel" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uno">Detalhes de Fiat Uno</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Fiat</li>
                            <li><strong>Modelo:</strong> Uno Attractive 1.0 Firefly</li>
                            <li><strong>Ano:</strong> 2017</li>
                            <li><strong>Motor:</strong> 1.0 Firefly, 3 cilindros em linha, 999 cc, flex (álcool/gasolina)</li>
                            <li><strong>Potência:</strong> 77 cv (álcool) / 72 cv (gasolina) a 6.250 rpm </li>
                            <li><strong>Torque:</strong>10,9 kgfm (álcool) / 10,4 kgfm (gasolina) a 3.250 rpm</li>
                            <li><strong>Velocidade máxima:</strong> 157 km/h </li>
                            <li><strong>Peso:</strong>1.010 kg.</li>
                            <li><strong>Consumo médio:</strong> 9,2 km/l (álcool) / 13,1 km/l (gasolina)- cidade / 10,4 km/l (álcool) / 15,1 km/l (gasolina) -estrada</li>
                            <li><strong>Tipo de carroceria:</strong> Hatchback de 4 portas.</li>
                            <li><strong>Design inspirado:</strong> Projetado por Giorgetto Giugiaro, do estúdio Italdesign, destacando-se pelo formato quadrado e coeficiente aerodinâmico baixo (0,34).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalcorsaclassic" tabindex="-1" aria-labelledby="modalcorsaclassicLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalcorsaclassicLabel">Corsa Classic 2002</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Chevrolet</li>
                            <li><strong>Modelo:</strong> Corsa Classic</li>
                            <li><strong>Ano:</strong> 2002</li>
                            <li><strong>Motor:</strong> 1.0 ou 1.6 (dependendo da versão)</li>
                            <li><strong>Potência:</strong> Aproximadamente 60 cv (1.0) / 92 cv (1.6)</li>
                            <li><strong>Torque:</strong> 8,3 kgfm (1.0) / 13,3 kgfm (1.6)</li>
                            <li><strong>Transmissão:</strong> Manual de 5 marchas</li>
                            <li><strong>Tração:</strong> Dianteira (FWD)</li>
                            <li><strong>0 a 100 km/h:</strong> Cerca de 15 segundos (1.0)</li>
                            <li><strong>Velocidade máxima:</strong> Aproximadamente 150 km/h (1.0)</li>
                            <li><strong>Peso:</strong> Aproximadamente 900 kg</li>
                            <li><strong>Consumo médio:</strong> 10 km/l (cidade) / 14 km/l (estrada)</li>
                            <li><strong>Tipo de carroceria:</strong> Sedã compacto</li>
                            <li><strong>Combustível:</strong> Gasolina</li>
                            <li><strong>Destaques:</strong> Econômico, manutenção barata e confiável</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalHayabusa2016" tabindex="-1" aria-labelledby="modalHayabusa2016Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHayabusa2016Label">Suzuki Hayabusa 2016</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Suzuki</li>
                            <li><strong>Modelo:</strong> GSX1300R Hayabusa</li>
                            <li><strong>Ano:</strong> 2016</li>
                            <li><strong>Motor:</strong> 1.340 cc, 4 cilindros em linha, DOHC, 16 válvulas</li>
                            <li><strong>Potência:</strong> Aproximadamente 197 cv a 9.500 rpm</li>
                            <li><strong>Torque:</strong> 15,7 kgfm a 7.200 rpm</li>
                            <li><strong>Transmissão:</strong> Manual de 6 marchas</li>
                            <li><strong>Tração:</strong> Traseira (por corrente)</li>
                            <li><strong>0 a 100 km/h:</strong> Cerca de 2,7 segundos</li>
                            <li><strong>Velocidade máxima:</strong> Limitada eletronicamente a cerca de 299 km/h</li>
                            <li><strong>Peso:</strong> Aproximadamente 266 kg (com tanque cheio)</li>
                            <li><strong>Consumo médio:</strong> 14–18 km/l (dependendo do estilo de pilotagem)</li>
                            <li><strong>Tipo:</strong> Moto esportiva (Sport Touring)</li>
                            <li><strong>Destaques:</strong> Uma das motos mais rápidas do mundo, conhecida pela potência e estabilidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  
</body>
</html>