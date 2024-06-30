from flask import Flask, render_template
import sqlite3
from config import config

app = Flask(__name__)

def get_news():
    conn = sqlite3.connect(config['database'])
    cursor = conn.cursor()
    cursor.execute("SELECT title, description, date, time FROM news")
    news = cursor.fetchall()
    conn.close()
    return news

@app.route('/')
def home():
    news = get_news()
    return render_template('index.html', news=news)

if __name__ == '__main__':
    app.run(debug=True)
