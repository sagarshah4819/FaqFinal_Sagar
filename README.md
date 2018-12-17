**Feature: Email Notification**

The main feature of the project is to send the notification to the user on his registered email-id when someone replies,
edits or deletes the answer to his question. The user should be a registered user in-order to get the email.

1.	User1 has to register with valid email id and password.
2.	On the home page, user1 can create a new question, edit his/her previously asked question and delete the question.
3.	User2 when logs in, he can see the questions posted and can click on view to answer the question.
4.	When user2 answers the question or edits/deletes his answer to the question, user1 who has posted the question will 
get an email notification on his registered email id.
5.	user1 can directly view the answers to the question by clicking on the link in the email.
6.	After logging in user can view all the question and answers posted by other users.
7.	Every question is associated with valid user-id. 
8.	Added a feature Test in order to test if the user is getting notification when someone replies to his/her question.
9.	Added unit test and dusk test for registration and login.

**Note:**  Sometimes you can observe delays in getting an email. If you don’t receive an email, there is a possibility that 
SendGrid has blocked the account, in that case please let me know about it.

**GitHubLink:**   https://github.com/sagarshah4819/FaqFinal_Sagar

**HerokuLink:** http://sagarfinalproject.herokuapp.com/
