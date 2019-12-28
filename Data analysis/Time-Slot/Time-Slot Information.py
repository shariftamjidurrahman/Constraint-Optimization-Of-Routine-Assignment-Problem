import pandas as pd
import matplotlib.pyplot as plt

Time_slot_info=pd.read_excel("Time-slot-info.xlsx")

pd.set_option('display.max_rows',None)
pd.set_option('display.max_columns',None)
#print("Raw data head : ")
#print(Time_slot_info.head())
print(Time_slot_info.columns)

