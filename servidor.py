from flask import Flask, render_template

app = Flask(__name__)

miedad = 45

@app.route('/')
def home():
    return ""

@app.route('/clientes')
def clientes():
    return '[{"nombre":"Jose Vicente","descripcion":"descripcion del primer cliente"},{"nombre":"Juan","descripcion":"descripcion del segundo cliente"}]'


if __name__ == '__main__':
    app.run(port=8080)
