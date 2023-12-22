from flask import Flask, render_template

app = Flask(__name__)

miedad = 45

@app.route('/')
def home():
    return ""

@app.route('/clientes')
def clientes():
    return '[{"nombre":"Jose Vicente"},{"nombre":"Juan"}]'


if __name__ == '__main__':
    app.run(port=8080)
