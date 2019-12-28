import matplotlib.pyplot as plt
import pandas as pd

plt.style.use('ggplot')
room=pd.read_excel('Room-info.xlsx')
Room_Number = room["Room Number"]
Total_Course_MSCSE = room["Total Course MSCSE"]
Total_Sections_MSCSE = room["Total Sections MSCSE"]


ind = [x for x, _ in enumerate(Room_Number)]
plt.figure(figsize=(15,10))
plt.bar(ind, Total_Credit_of_BSCSE, width=0.8,label='Total Credit of BSCSE', color='gold', bottom=Total_Credit_of_MSCSE+Total_Credit_of_BSEEE)
plt.bar(ind, Total_Credit_of_BSCSE, width=0.8, color='gold', bottom=Total_Credit_of_MSCSE)
plt.bar(ind, Total_Credit_of_BSCSE, width=0.8, color='gold', bottom=Total_Credit_of_BSEEE)
plt.bar(ind, Total_Credit_of_BSCSE, width=0.8, color='gold')

plt.bar(ind, Total_Credit_of_BSEEE, width=0.8,label='Total Credit of BSEEE', color='silver', bottom=Total_Credit_of_MSCSE)
plt.bar(ind, Total_Credit_of_BSEEE, width=0.8, color='silver')

plt.bar(ind, Total_Credit_of_MSCSE, width=0.8,label='Total Credit of MSCSE', color='#CD853F')


plt.hlines(14,0,room.shape[0],color='r')
plt.hlines(10,0,room.shape[0],color='g')
plt.xticks(ind, Faculty_name,rotation=90)
plt.ylabel("Total Credit")
plt.xlabel("Faculty Members Name")
plt.legend(loc="upper right")
plt.title("BSCSE Faculty section of courses information")

plt.show()