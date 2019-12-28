import pandas as pd
import matplotlib.pyplot as pp

billboard=pd.read_excel("BSCSE-Full-Routine.xlsx")

pd.set_option('display.max_rows',None)
pd.set_option('display.max_columns',None)
#print("Raw data head : ")
#print(billboard.head())
print(billboard.columns)

