import 'package:flutter/material.dart';
import 'package:summamove/services/Oefening_service.dart';
import '../models/Oefening_model.dart';

class OefeningenPage extends StatefulWidget {
  const OefeningenPage({Key? key}) : super(key: key);

  @override
  State<OefeningenPage> createState() => _OefeningenPageState();
}

class _OefeningenPageState extends State<OefeningenPage> {
    @override
    Widget build(BuildContext context) {
      return Scaffold(
        body: FutureBuilder<List<Oefening>>(
          future: fetchOefening(),
          builder: (context, snapshot) {
            if (snapshot.hasError) {
              return Center(child: Text(snapshot.error.toString()));
            }
            if (snapshot.hasData == false) {
              return Center(child: CircularProgressIndicator());
            }

            final List<Oefening> oefeningen = snapshot.data!;

            return ListView.builder(
                itemCount: oefeningen.length,
                itemBuilder: (context, index) {
                  final oefening = oefeningen[index];
                  return Padding(
                    padding: const EdgeInsets.all(8.0),
                    child: Container(
                      decoration: BoxDecoration(
                          color: Colors.grey[300],
                          borderRadius: BorderRadius.circular(12)),
                      child: ListTile(
                        leading: Text('${index + 1}'),
                        title: Text(oefening.naam),
                        subtitle: Text(oefening.beschrijving),
                        ),
                      ),
                    );
                },
                );
          },
        ),
      );
    }
  }

