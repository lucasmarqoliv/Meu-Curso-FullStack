import requests
import json

# Substitua 'YOUR_API_KEY' pela sua chave de API do Google Cloud
api_key = 'YOUR_API_KEY'
# Texto a ser traduzido
text = 'Hello, how are you?'
# Idioma de origem
source_language = 'en'
# Idioma de destino
target_language = 'es'

# URL da API
url = f"https://translation.googleapis.com/language/translate/v2?key={api_key}"

# Parâmetros da requisição
payload = {
    'q': text,
    'source': source_language,
    'target': target_language,
    'format': 'text'
}
