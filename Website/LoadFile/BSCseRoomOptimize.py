import pandas as pd
import random
template = pd.read_excel('BSCSE-Full-Routine.xlsx')
rooms=pd.read_excel('Room-info.xlsx')
sections=pd.read_excel('Sections-info-BSCSE.xlsx')

# lets decide the variables
room_numbers=rooms['Room Number'].values.tolist()  # Room numbers
no_of_rooms =  rooms.shape[0] # number of rooms 
rooms=rooms.fillna(0) # fill all NaN by 0

# set global limits
max_course_limit_room=10
min_course_limit_room=5
max_section_limit_room=20
min_section_limit_room=10


no_of_courses = template.shape[0]#gets the number of course
taken = [0] * no_of_courses

course_codes =  template["FormalCode"].values.tolist()
sections = template["SectionName"].values.tolist()
room = template["Room1"].values.tolist()
day1 = template["Day1"].values.tolist()
day2 = template["Day2"].values.tolist()
time1 = template["Time1"].values.tolist()
credits=[]

final_room_numbers_list=[]

## find out credits from course codes
for code in course_codes:
  c=(code.split(" ")[1].split("."))[0]
  if int(c)%2==0:
    credits.append(1)
  else:
    credits.append(3)

    

assigned_room=template["Room1"].values.tolist()

# clear all assignments
for i in range(no_of_rooms):
    assigned_room[i]=0
    
def isValid(s):
  # in this function we need to check whether the solution s violates any hard constraints
  # we have got random faculty members assigned in each course 
  # lets populate courses for each faculty
  room_number_list={}
  for i in range(no_of_courses):
    if s[i] in room_number_list:
      if taken[i] == 0:
        list=room_number_list[s[i]]
        list.append(i)
        room_number_list[s[i]]=list
        taken[i] = 1
    else:
      if taken[i] == 0:
        list=[i]
        room_number_list[s[i]]=list
        taken[i] = 1
  
  return True

def quality(s):
  # in this function we need to check whether the solution s violates any soft constraints
  # we have got random faculty members assigned in each course 
  # lets populate courses for each faculty
  room_number_list={}
  for i in range(no_of_courses):      
    if s[i] in room_number_list:
      list=room_number_list[s[i]]
      list.append(i)
      room_number_list[s[i]]=list
    else:
      list=[i]
      room_number_list[s[i]]=list
      
  return True
  
  # now we have got course list for each of the faculty members, now lets check conflicts
  # lets first check if the total courses exceeds global limit

def generateRandomValid():
  s=[]
  room_number_list={}
  for i in range(no_of_courses):
    while(True):
      f=random.randrange(no_of_rooms)
      if f in room_number_list:
        list=room_number_list[f]
        if len(list)<max_course_limit_room and len(list)<max_section_limit_room:
            list.append(i)
            room_number_list[f]=list
            s.append(f)
            break
      else:
        list=[i]
        room_number_list[f]=list
        s.append(f)
        break
  return s

def RandomNeighborhoodSearch(maxIter):
  # lets create an initial solution
  s = generateRandomValid()

  if isValid(s) and quality(s):
    return s
          
    
    
  
final_room_numbers_list = RandomNeighborhoodSearch(1000)

assigned_room_numbers=[]
for i in range(no_of_courses):
  assigned_room_numbers.append(room_numbers[final_room_numbers_list[i]])


dataOut=pd.DataFrame(
    {'Course Code': course_codes,
     'Section': sections,
     'Room': assigned_room_numbers,
    })
        
dataOut.to_excel("output-Optimized-Room-BSCSE.xlsx")
    