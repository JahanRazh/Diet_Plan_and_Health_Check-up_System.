#pragma once
#include <string>
using namespace std;

class Manage {
    
    private:

        int ManageId;
        string Date;
        string option;

    public:

        void scheduleAppointment(int MngId, string D, string opt);
        void updateAppointment();
        void cancelAppointment();
};
