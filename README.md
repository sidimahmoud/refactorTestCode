# refactorTestCode
My opinion: The code is very hard to understand the methods are too long. 
            The best pratice that the controller didn't handle logic.

Suggestion: The use of observers, Jobs, notification classes.

Changes that I made: 
 
 1- For controller: I used serviceProvider for the logic it will be a rubric between the repository and the controller.

2- Repository:

        -The use of findOrFail method no need for check if exist.
        -Method Store:
          * Use of request validation StoreBookingRequest with custom message errors.
          * basic use of the ternary operator.
        -jobToData :
          * Use $job->all().
        - Rather than using sendSMSNotificationToTranslator
                            sendPushNotificationToSpecificUsers
                            sendSessionStartRemindNotification
                            sendChangedTranslatorNotification
                            sendChangedDateNotification
                            sendChangedLangNotification
                            sendExpiredNotification
          I would use laravel make:notification notify it's very easy to implement.
        - Updatejob use getOriginal instead of log_data.
