from flask import Flask, render_template

app = Flask(__name__)

miedad = 45

@app.route('/')
def home():
    return ""

@app.route('/clientes')
def clientes():
    return '[{"nombre":"Jose Vicente","descripcion":"descripcion del primer cliente"},{"nombre":"Juan","descripcion":"descripcion del segundo cliente"}]'

@app.route('/productos')
def productos():
    return '[{"nombre":"Producto 1","descripcion":"descripcion del producto 1"},{"nombre":"Producto 2","descripcion":"descripcion del segundo producto"}]'


if __name__ == '__main__':
    app.run(port=8080)
