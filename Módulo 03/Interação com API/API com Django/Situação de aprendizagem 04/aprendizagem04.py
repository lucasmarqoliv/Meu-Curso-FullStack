import requests

# Substitua 'YOUR_API_KEY' pela sua chave de API do OMDB
api_key = '77eb2356'
# Título do filme a ser buscado
movie_title = input('Digite o nome do Filme: ')
# URL da API
base_url = f"http://www.omdbapi.com/?apikey={api_key}&t={movie_title}"

# Fazer a requisição GET
response = requests.get(base_url)

# Parse do JSON retornado
data = response.json()

# Verificar se a resposta contém dados válidos
if data["Response"] == "True":
    # Extrair informações relevantes
    title = data.get("Title", "N/A")
    year = data.get("Year", "N/A")
    director = data.get("Director", "N/A")
    plot = data.get("Plot", "N/A")

    # Exibir as informações de maneira amigável
    print(f"Título: {title}")
    print(f"Ano: {year}")
    print(f"Diretor: {director}")
    print(f"Sinopse: {plot}")
else:
    print("Filme não encontrado!")
