# import pandas as pd
# import pickle
# import pickle
#
# import pandas as pd
#
# df = pd.read_csv('placement.csv')
#
# print(df.head())
#
# X = df.iloc[:, 0].values
# y = df.iloc[:, 1].values
#
# from sklearn.model_selection import train_test_split
#
# X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=2)
#
# from sklearn.linear_model import LinearRegression
#
# lr = LinearRegression()
#
# # print(lr.fit(X_train, y_train))
#
#
# pickle.dump(lr,open('lin_model.pkl','wb'))
#


import numpy as np
import pandas as pd
import pickle

df = pd.read_csv("Social_Network_Ads.csv")

print(df.head())

X = df.iloc[:, :-1].values
y = df.iloc[:, -1].values

from sklearn.model_selection import train_test_split

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=2)

from sklearn.neighbors import KNeighborsClassifier

classifier = KNeighborsClassifier(n_neighbors=5)

print(classifier.fit(X_train, y_train))

pickle.dump(classifier, open('model.pkl', 'wb'))
