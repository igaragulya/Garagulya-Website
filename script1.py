from flask import Flask, render_template

app=Flask(__name__)

@app.route('/')
def home():
    return render_template("home.html")

@app.route('/projects/')
def projects():
    return render_template("projects.html")
@app.route('/pricing/')
def Price():
    return render_template("pri.html")
@app.route('/contact/')
def Con():
    return render_template("Contact.html")

if __name__=="__main__":
    app.run(debug=True)
