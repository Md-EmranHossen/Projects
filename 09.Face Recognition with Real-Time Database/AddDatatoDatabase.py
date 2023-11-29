import firebase_admin
from firebase_admin import credentials
from firebase_admin import db

cred = credentials.Certificate("serviceAccountKey.json")
firebase_admin.initialize_app(
    cred,
    {
        "databaseURL": "https://faceattendencerealtime-emran-default-rtdb.firebaseio.com/"
    },
)

ref = db.reference("Students")

data = {

    "21225103023": {
        "name": "MD. Touhidur Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 10,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103046": {
        "name": "Rifatul Islam",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 13,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103053": {
        "name": "Sajib Ahmed",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 12,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103064": {
        "name": "Md. Emran Hossen",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 7,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103071": {
        "name": "Masura Aktar Nodi",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 7,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103076": {
        "name": "Rakib Hossain",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 9,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103079": {
        "name": "Ridwanur Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 11,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103100": {
        "name": "Arifa Haque",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 8,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103104": {
        "name": "Suborna Sutradhar",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 12,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103228": {
        "name": "Rafi Afsan",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 8,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103231": {
        "name": "Emamul Hasan Shakil",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 13,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103235": {
        "name": "Salsabila Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 11,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103242": {
        "name": "Bulbul Ahmed",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 6,
        "standing": "A-",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103254": {
        "name": "Md Nahidujaman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 10,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103263": {
        "name": "Mst.Mahfuza Khatun",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 12,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103265": {
        "name": "Biplob Islam",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 6,
        "standing": "A-",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103267": {
        "name": "Shayaf Hasan",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 11,
        "standing": "A-",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103269": {
        "name": "Tanha Saeera Tamanna",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 10,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103385": {
        "name": "Taspia Jannat Moon",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 7,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103389": {
        "name": "Nowshin Tabassum",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 10,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103441": {
        "name": "Md. Faysal Ahmmed",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 14,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103460": {
        "name": "Fairuz Tasnim",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 14,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103471": {
        "name": "MD. Ashikur Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 12,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103473": {
        "name": "Sumaiya Hossain",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 6,
        "standing": "A-",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103478": {
        "name": "Nahid Parvin",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 7,
        "standing": "A",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103487": {
        "name": "Kaspia Alam",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 8,
        "standing": "A-",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103506": {
        "name": "Abdullah Al Mahmud Joy",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103500": {
        "name": "Shifat",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103014": {
        "name": "Muttakimun Nahar",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103233": {
        "name": "Toudidur Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103253": {
        "name": "Md. Muinul",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


    "21225103256": {
        "name": "Abdullah Fayez",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },

    "21225103499": {
        "name": "Arifur Rahman",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },
    "21225103049": {
        "name": "Shakibul Islam",
        "major": "CSE",
        "starting_year": 2021,
        "total_attendance": 15,
        "standing": "A+",
        "year": 1,
        "last_attendance_time": "2022-12-11 00:54:34",
    },


}

for key, value in data.items():
    ref.child(key).set(value)
