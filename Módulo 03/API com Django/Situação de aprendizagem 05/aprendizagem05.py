import requests

# URL da API para projeção da população
url = "https://servicodados.ibge.gov.br/api/v1/projecoes/populacao"

# Fazer a requisição GET
response = requests.get(url)

# Parse do JSON retornado
data = response.json()

# Verificar se a resposta contém dados válidos
if response.status_code == 200:
    # Extrair informações relevantes
    populacao = data.get("projecao", {}).get("populacao", "N/A")
    crescimento = data.get("projecao", {}).get("periodoMedioCrescimento", {}).get("incrementoPopulacional", "N/A")
    data_projecao = data.get("horario", "N/A")

    # Exibir as informações de maneira amigável
    print(f"População projetada: {populacao}")
    print(f"Crescimento populacional: {crescimento}")
    print(f"Data da projeção: {data_projecao}")
else:
    print("Erro ao obter os dados!")
