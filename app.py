from flask import Flask, render_template, request
import pickle
import pandas

app = Flask(__name__)

classifier = pickle.load(open('model.pkl', 'rb'))


@app.route('/')
def home():
    return render_template('index.html')


@app.route('/predict', methods=['POST'])
def predict():
    age = request.form.get('age')
    salary = request.form.get('salary')

    age_numeric = float(age)
    salary_numeric = float(salary)

    res = classifier.predict([[age_numeric, salary_numeric]])[0]

    if res==1:
        return render_template('index.html', label=1)
    else:
        return render_template('index.html', label=-1)


    # return "The age is {} and the salary is {}".format(age_numeric, salary_numeric)


if __name__ == '__main__':
    # app.run(debug=True)
    app.run(host='0.0.0.0', port=8080)
