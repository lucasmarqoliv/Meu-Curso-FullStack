from flask import Flask, request, jsonify
import pandas as pd

app = Flask(__name__)

# Carregar dados CSV em um DataFrame global (pode ser ajustado para carregar dinamicamente)
df = pd.DataFrame({
    'category': ['A', 'B', 'A', 'B', 'A', 'C'],
    'values': [10, 20, 30, 40, 50, 60]
})

@app.route('/group_sum', methods=['GET'])
def group_sum():
    group_by_col = request.args.get('group_by')
    sum_col = request.args.get('sum_col')

    if not group_by_col or not sum_col:
        return jsonify({'error': 'Parâmetros "group_by" e "sum_col" são necessários'}), 400

    if group_by_col not in df.columns or sum_col not in df.columns:
        return jsonify({'error': 'Colunas especificadas não são válidas'}), 400

    grouped_df = df.groupby(group_by_col)[sum_col].sum().reset_index()
    result = grouped_df.to_dict(orient='records')

    return jsonify(result)

if __name__ == '__main__':
    app.run(debug=True)