import 'dart:convert';
import 'dart:math';
import 'package:flutter_posts/pages/AppBarr.dart';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';
import 'package:flutter_posts/domain/post.dart';

class PostPage extends StatefulWidget {
  PostPage({Key? key, required this.id}) : super(key: key);

  final int id;

  @override
  _PostPageState createState() => _PostPageState(id: this.id);
}
// page correspondant à un post
class _PostPageState extends State<PostPage> {
  final int id;
  Post? post;

  _PostPageState({required this.id});

  @override
  void initState() {
    super.initState();
    this.loadPost(id);
  }

  void loadPost(int id) async {
    var uri = Uri.parse('https://jsonplaceholder.typicode.com/posts/$id');
    var resp = await http.get(uri);

    var data = jsonDecode(resp.body);
    setState(() {
      this.post = Post.fromJson(data);
    });
  }

  Widget getTitle() {
    if (this.post == null) {
      return Text("Loading");
    }
    return Text("Post #${this.post!.id}");
  }

  Widget getBody() {
    if (this.post == null) {
      return Center(
          child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: <Widget>[
          Text("Loading"),
        ],
      ));
    }
    return Center(
      child:
        Container(
          height: double.infinity,
          decoration: BoxDecoration(
              image: DecorationImage(
                image: AssetImage("bg/index.png"),
                fit: BoxFit.cover,
                colorFilter: new ColorFilter.mode(Colors.black.withOpacity(0.2), BlendMode.dstATop),
              )
          ),
          padding: EdgeInsets.all(10),
          child: Table(
            children: [
              TableRow(children: [
                TableCell(child: Text("UserId :")),
                TableCell(child: Text(post!.userId.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Titre de la recette :")),
                TableCell(child: Text(post!.title.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Body :")),
                TableCell(child: Text(post!.body.toString())),
              ]),
              TableRow(children: [
                TableCell(child: Text("Image :")),
                TableCell(child: Image.network("https://www.google.com/search?q=image&client=firefox-b-d&sxsrf=ALeKk03LXI6oMAKKFwo9fFkHabYysNlM5A:1625053462065")),
              ])
            ],
          ),
        ),


    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: BaseAppBar(
        title: Text("widget.title"+post!.title.toString()),
        appBar: AppBar(),
        widgets: <Widget>[Icon(Icons.more_vert)],
      ),

      body: getBody(),
    );
  }
}
