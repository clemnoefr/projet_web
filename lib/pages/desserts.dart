import 'dart:html';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_posts/domain/post.dart';
import 'package:http/http.dart' as http;

import 'AppBarr.dart';

class DessertPage extends StatefulWidget {
  @override
  State<StatefulWidget> createState() => _DessertPageState();
}
// page avec formulaire pour ajouter un post
class _DessertPageState extends State<DessertPage> {
  final _form = GlobalKey<FormState>();
  final _titleCtrl = TextEditingController();
  final _messageCtrl = TextEditingController();

  String? notEmpty(value) {
    if (value!.isEmpty) {
      return "field can't be empty";
    }
    return null;
  }

  String getMessage(int status){
    switch(status){
      case 201: return "your post is saved";
      case 401: return "authentification error";
      case 403: return "authentification required";
      default: return "server error";
    }
  }

  Future<void> submit() async{
    if (_form.currentState!.validate()) {
      var post =new Post(id: 0, userId: 1, title:_titleCtrl.text , body: _messageCtrl.text);
      var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts');
      var resp = await http.post(uri, body: post.toJson());
      ScaffoldMessenger.of(context).showSnackBar(SnackBar(content: Text(getMessage(resp.statusCode))));
      if(resp.statusCode == HttpStatus.created) {
        Navigator.pop(context);
      }
    }
  }

  Widget getBody() {
    return Form(
      key: _form,
      child: Column(
        children: [
          Text('title'),
          TextFormField(
            controller: _titleCtrl,
            decoration: InputDecoration(
              labelText: "title",
              hintText: "the post title",
            ),
            validator: notEmpty,
          ),
          Text("Message"),
          TextFormField(
            controller: _messageCtrl,
            decoration: InputDecoration(
              labelText: "message",
              hintText: "the post message",
            ),
            validator: notEmpty,
          ),
          Padding(
            padding: EdgeInsets.symmetric(vertical: 10),
            child: ElevatedButton(onPressed: submit, child: Text('submit')),
          )
        ],
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: BaseAppBar(
        title: Text('Liste de recettes pour les desserts'),
        appBar: AppBar(),
        widgets: <Widget>[Icon(Icons.more_vert)],
      ),
      body: getBody(),
    );
  }
}
