=== CREATE

SELECT "sentry_projectoptions"."id", "sentry_projectoptions"."project_id", "sentry_projectoptions"."key", "sentry_projectoptions"."value" FROM "sentry_projectoptions" WHERE "sentry_projectoptions"."project_id" = 4 ; args=(4,)


SELECT "sentry_groupedmessage"."id", "sentry_groupedmessage"."project_id", "sentry_groupedmessage"."logger", "sentry_groupedmessage"."level", "sentry_groupedmessage"."message", "sentry_groupedmessage"."view", "sentry_groupedmessage"."checksum", "sentry_groupedmessage"."num_comments", "sentry_groupedmessage"."platform", "sentry_groupedmessage"."status", "sentry_groupedmessage"."times_seen", "sentry_groupedmessage"."last_seen", "sentry_groupedmessage"."first_seen", "sentry_groupedmessage"."resolved_at", "sentry_groupedmessage"."active_at", "sentry_groupedmessage"."time_spent_total", "sentry_groupedmessage"."time_spent_count", "sentry_groupedmessage"."score", "sentry_groupedmessage"."is_public", "sentry_groupedmessage"."data" FROM "sentry_groupedmessage" WHERE ("sentry_groupedmessage"."project_id" = 4  AND "sentry_groupedmessage"."checksum" = ad196ffd7ac755b551a41a59a10d21dd ); args=(4, 'ad196ffd7ac755b551a41a59a10d21dd')

(0.000) INSERT INTO "sentry_groupedmessage" ("project_id", "logger", "level", "message", "view", "checksum", "num_comments", "platform", "status", "times_seen", "last_seen", "first_seen", "resolved_at", "active_at", "time_spent_total", "time_spent_count", "score", "is_public", "data") VALUES (4, php, 40, This is a test exception sent from the Raven CLI., , ad196ffd7ac755b551a41a59a10d21dd, 0, php, 0, 1, 2013-11-16 08:31:12, 2013-11-16 08:31:12, None, 2013-11-16 08:31:12, 0, 0, 0, False, None); args=[4, u'php', 40, u'This is a test exception sent from the Raven CLI.', '', 'ad196ffd7ac755b551a41a59a10d21dd', 0, u'php', 0, 1, u'2013-11-16 08:31:12', u'2013-11-16 08:31:12', None, u'2013-11-16 08:31:12', 0, 0, 0, False, None]

(0.000) UPDATE "sentry_groupedmessage" SET "score" = 1384590672 WHERE "sentry_groupedmessage"."id" = 65 ; args=(65,)

(0.000) UPDATE "sentry_messagecountbyminute" SET "times_seen" = "sentry_messagecountbyminute"."times_seen" + 1 WHERE ("sentry_messagecountbyminute"."project_id" = 4  AND "sentry_messagecountbyminute"."date" = 2013-11-16 08:30:00  AND "sentry_messagecountbyminute"."group_id" = 65 ); args=(1, 4, u'2013-11-16 08:30:00', 65)

(0.000) INSERT INTO "sentry_messagecountbyminute" ("project_id", "group_id", "date", "times_seen", "time_spent_total", "time_spent_count") VALUES (4, 65, 2013-11-16 08:30:00, 1, 0, 0); args=[4, 65, u'2013-11-16 08:30:00', 1, 0, 0]

(0.000) UPDATE "sentry_projectcountbyminute" SET "times_seen" = "sentry_projectcountbyminute"."times_seen" + 1 WHERE ("sentry_projectcountbyminute"."project_id" = 4  AND "sentry_projectcountbyminute"."date" = 2013-11-16 08:30:00 );

(0.000) INSERT INTO "sentry_projectcountbyminute" ("project_id", "date", "times_seen", "time_spent_total", "time_spent_count") VALUES (4, 2013-11-16 08:30:00, 1, 0, 0); args=[4, u'2013-11-16 08:30:00', 1, 0, 0]

(0.000) UPDATE "sentry_filtervalue" SET "times_seen" = "sentry_filtervalue"."times_seen" + 1, "data" = NULL, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_filtervalue"."project_id" = 4  AND "sentry_filtervalue"."value" = error  AND "sentry_filtervalue"."key" = level ); args=(1, u'2013-11-16 08:31:12', 4, u'error', 'level')

(0.001) INSERT INTO "sentry_filtervalue" ("project_id", "key", "value", "data", "times_seen", "last_seen", "first_seen") VALUES (4, level, error, None, 1, 2013-11-16 08:31:12, 2013-11-16 08:31:13.256243); args=[4, 'level', u'error', None, 1, u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.256243']
(0.000) UPDATE "sentry_filterkey" SET "values_seen" = "sentry_filterkey"."values_seen" + 1 WHERE ("sentry_filterkey"."project_id" = 4  AND "sentry_filterkey"."key" = level ); args=(1, 4, 'level')
(0.000) INSERT INTO "sentry_filterkey" ("project_id", "key", "values_seen", "label") VALUES (4, level, 1, None); args=[4, 'level', 1, None]
(0.000) UPDATE "sentry_messagefiltervalue" SET "times_seen" = "sentry_messagefiltervalue"."times_seen" + 1, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_messagefiltervalue"."project_id" = 4  AND "sentry_messagefiltervalue"."group_id" = 65  AND "sentry_messagefiltervalue"."value" = error  AND "sentry_messagefiltervalue"."key" = level ); args=(1, u'2013-11-16 08:31:12', 4, 65, u'error', 'level')
(0.000) INSERT INTO "sentry_messagefiltervalue" ("project_id", "group_id", "times_seen", "key", "value", "last_seen", "first_seen") VALUES (4, 65, 1, level, error, 2013-11-16 08:31:12, 2013-11-16 08:31:13.262033); args=[4, 65, 1, 'level', u'error', u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.262033']
(0.000) UPDATE "sentry_grouptagkey" SET "values_seen" = "sentry_grouptagkey"."values_seen" + 1 WHERE ("sentry_grouptagkey"."project_id" = 4  AND "sentry_grouptagkey"."group_id" = 65  AND "sentry_grouptagkey"."key" = level ); args=(1, 4, 65, 'level')
(0.001) INSERT INTO "sentry_grouptagkey" ("project_id", "group_id", "key", "values_seen") VALUES (4, 65, level, 1); args=[4, 65, 'level', 1]
(0.000) UPDATE "sentry_filtervalue" SET "times_seen" = "sentry_filtervalue"."times_seen" + 1, "data" = NULL, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_filtervalue"."project_id" = 4  AND "sentry_filtervalue"."value" = php  AND "sentry_filtervalue"."key" = logger ); args=(1, u'2013-11-16 08:31:12', 4, u'php', 'logger')
(0.000) INSERT INTO "sentry_filtervalue" ("project_id", "key", "value", "data", "times_seen", "last_seen", "first_seen") VALUES (4, logger, php, None, 1, 2013-11-16 08:31:12, 2013-11-16 08:31:13.267285); args=[4, 'logger', u'php', None, 1, u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.267285']

(0.000) UPDATE "sentry_filterkey" SET "values_seen" = "sentry_filterkey"."values_seen" + 1 WHERE ("sentry_filterkey"."project_id" = 4  AND "sentry_filterkey"."key" = logger ); args=(1, 4, 'logger')

(0.000) INSERT INTO "sentry_filterkey" ("project_id", "key", "values_seen", "label") VALUES (4, logger, 1, None); args=[4, 'logger', 1, None]

(0.000) UPDATE "sentry_messagefiltervalue" SET "times_seen" = "sentry_messagefiltervalue"."times_seen" + 1, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_messagefiltervalue"."project_id" = 4  AND "sentry_messagefiltervalue"."group_id" = 65  AND "sentry_messagefiltervalue"."value" = php  AND "sentry_messagefiltervalue"."key" = logger ); args=(1, u'2013-11-16 08:31:12', 4, 65, u'php', 'logger')

(0.000) INSERT INTO "sentry_messagefiltervalue" ("project_id", "group_id", "times_seen", "key", "value", "last_seen", "first_seen") VALUES (4, 65, 1, logger, php, 2013-11-16 08:31:12, 2013-11-16 08:31:13.271828); args=[4, 65, 1, 'logger', u'php', u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.271828']

(0.000) UPDATE "sentry_grouptagkey" SET "values_seen" = "sentry_grouptagkey"."values_seen" + 1 WHERE ("sentry_grouptagkey"."project_id" = 4  AND "sentry_grouptagkey"."group_id" = 65  AND "sentry_grouptagkey"."key" = logger ); args=(1, 4, 65, 'logger')

(0.000) INSERT INTO "sentry_grouptagkey" ("project_id", "group_id", "key", "values_seen") VALUES (4, 65, logger, 1); args=[4, 65, 'logger', 1]

(0.000) UPDATE "sentry_filtervalue" SET "times_seen" = "sentry_filtervalue"."times_seen" + 1, "data" = NULL, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_filtervalue"."project_id" = 4  AND "sentry_filtervalue"."value" = allanwang-NB.local  AND "sentry_filtervalue"."key" = server_name ); args=(1, u'2013-11-16 08:31:12', 4, u'allanwang-NB.local', 'server_name')

(0.000) INSERT INTO "sentry_filtervalue" ("project_id", "key", "value", "data", "times_seen", "last_seen", "first_seen") VALUES (4, server_name, allanwang-NB.local, None, 1, 2013-11-16 08:31:12, 2013-11-16 08:31:13.276628); args=[4, 'server_name', u'allanwang-NB.local', None, 1, u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.276628']

(0.000) UPDATE "sentry_filterkey" SET "values_seen" = "sentry_filterkey"."values_seen" + 1 WHERE ("sentry_filterkey"."project_id" = 4  AND "sentry_filterkey"."key" = server_name ); args=(1, 4, 'server_name')

(0.000) INSERT INTO "sentry_filterkey" ("project_id", "key", "values_seen", "label") VALUES (4, server_name, 1, None); args=[4, 'server_name', 1, None]

(0.000) UPDATE "sentry_messagefiltervalue" SET "times_seen" = "sentry_messagefiltervalue"."times_seen" + 1, "last_seen" = 2013-11-16 08:31:12 WHERE ("sentry_messagefiltervalue"."project_id" = 4  AND "sentry_messagefiltervalue"."group_id" = 65  AND "sentry_messagefiltervalue"."value" = allanwang-NB.local  AND "sentry_messagefiltervalue"."key" = server_name ); args=(1, u'2013-11-16 08:31:12', 4, 65, u'allanwang-NB.local', 'server_name')
(0.001) INSERT INTO "sentry_messagefiltervalue" ("project_id", "group_id", "times_seen", "key", "value", "last_seen", "first_seen") VALUES (4, 65, 1, server_name, allanwang-NB.local, 2013-11-16 08:31:12, 2013-11-16 08:31:13.281017); args=[4, 65, 1, 'server_name', u'allanwang-NB.local', u'2013-11-16 08:31:12', u'2013-11-16 08:31:13.281017']
(0.000) UPDATE "sentry_grouptagkey" SET "values_seen" = "sentry_grouptagkey"."values_seen" + 1 WHERE ("sentry_grouptagkey"."project_id" = 4  AND "sentry_grouptagkey"."group_id" = 65  AND "sentry_grouptagkey"."key" = server_name ); args=(1, 4, 65, 'server_name')
(0.000) INSERT INTO "sentry_grouptagkey" ("project_id", "group_id", "key", "values_seen") VALUES (4, 65, server_name, 1); args=[4, 65, 'server_name', 1]

(0.000) UPDATE "nodestore_node" SET "timestamp" = 2013-11-16 08:31:13.284859, "data" = eJylVUtv2zgQvutXsIYBy0Dih97ObnLYNocCRQ/brk8LGIxMy8LKpEDSLxT57/1mpDhu0cs2RgKI8+LMfB9nwnU7D76MnNLenie19spuZKnc5PFUqtbXRo+CNgrCdRvD7CCbvXKQJEHYtCmJM/L2svzPW/hBlZO0gHRj5Y6NF2Q8n5F8Tpdt9rrsI8+jYKn3TYOvOHBfRvLJrVrpt6RKguV0aZo9gkwfXWuVc2b6wRx1Y+TaTa08KH3bbtvbnXRIe/pU604I35SCwWVVGpR08hQv4zTyYBnIZb0RYWn22odDaavDWLy7F/FYfINZAbXAT51qH47+cbJSd4LjCq+cF3+unX4Yjf+A6QKmz/gPJN1mnL+6LprRddGcEjlIS32IuI8RF7oz631D7YpQZp91xFlv6kZpdI502e+3IMopWFNrpQ2FKoKPSUGi0jSdZBF8xrHWK9m2OMczPq+ll3SaM+ZR58FFrSgYqeJguZO1DqkHcRI4SZZpUBGYpIA0C1z1FgDjnAIwYnHBiBEkw7KpQVRxL7Q6ir/JdPWeReEQqNwIaa08h3Bf9B70G3XMFPcPwtu9ugF7Z716TCUk8w7CqoMsQRVXl90+lLL1e6suDyIcqhP7xezXGTcoYaWsNRbZXVwr5T9B8UhybleS9A5EwHdq1/pzeOU7Zgom6VX2TMPB162yShylE1KL7ho82XWtK+G3qiOmQjv83b/72SwttRADMblOi2/PuEymYUIdviIfkaN6C+GSBQUAzYgSFbOrYk5VHZfSGcTEHe6XOqFP7LlCs1ZUQDgozW4n9VoQ/QcvaA42xgwIvMGTtANGLJ13pEujjnQ/xoE+fiP90uRCvzRl+r3MrJ9zHvY53wgaJG4MXzR5+a1HcDoVH4xwZqf8lsByddOcYZP3egxdQjwtXvmXLroWPYtS+nIrwgvxqGtMkGx2RRCrwE7WoTPZvNc84zt6HU896BnaT2lCmfAZxaG9OAJ4tBcfoIVb9kXhiMd3jQokgPkH4uSzNxInn/fEAZS/Ik4eXRGHm7a15sgj4PVNjr5uayfwJ/vHcGkarTaxsWbHL4WHhnj/6eOER3gOpkiHGefPLS8v1HUJimPaP5Lfq+0OFbV51q0AbE66APvnf6cKt+IlT1nRKsl5pxYgDGY8Hn4DWUG7ld86HaLAtwUmFBmYqlIsRCXIEx8paTPWOmUPyq76lVMgP9k0Uh+lrm4//zVpTCmxnouCPBa86bALLO2IBa/0BeCbfAc2rZAP WHERE "nodestore_node"."id" = 42f1ac4adc724e4581ac12eaf88d24c4 ;

(0.000) INSERT INTO "nodestore_node" ("id", "data", "timestamp") SELECT 42f1ac4adc724e4581ac12eaf88d24c4 AS "id", eJylVUtv2zgQvutXsIYBy0Dih97ObnLYNocCRQ/brk8LGIxMy8LKpEDSLxT57/1mpDhu0cs2RgKI8+LMfB9nwnU7D76MnNLenie19spuZKnc5PFUqtbXRo+CNgrCdRvD7CCbvXKQJEHYtCmJM/L2svzPW/hBlZO0gHRj5Y6NF2Q8n5F8Tpdt9rrsI8+jYKn3TYOvOHBfRvLJrVrpt6RKguV0aZo9gkwfXWuVc2b6wRx1Y+TaTa08KH3bbtvbnXRIe/pU604I35SCwWVVGpR08hQv4zTyYBnIZb0RYWn22odDaavDWLy7F/FYfINZAbXAT51qH47+cbJSd4LjCq+cF3+unX4Yjf+A6QKmz/gPJN1mnL+6LprRddGcEjlIS32IuI8RF7oz631D7YpQZp91xFlv6kZpdI502e+3IMopWFNrpQ2FKoKPSUGi0jSdZBF8xrHWK9m2OMczPq+ll3SaM+ZR58FFrSgYqeJguZO1DqkHcRI4SZZpUBGYpIA0C1z1FgDjnAIwYnHBiBEkw7KpQVRxL7Q6ir/JdPWeReEQqNwIaa08h3Bf9B70G3XMFPcPwtu9ugF7Z716TCUk8w7CqoMsQRVXl90+lLL1e6suDyIcqhP7xezXGTcoYaWsNRbZXVwr5T9B8UhybleS9A5EwHdq1/pzeOU7Zgom6VX2TMPB162yShylE1KL7ho82XWtK+G3qiOmQjv83b/72SwttRADMblOi2/PuEymYUIdviIfkaN6C+GSBQUAzYgSFbOrYk5VHZfSGcTEHe6XOqFP7LlCs1ZUQDgozW4n9VoQ/QcvaA42xgwIvMGTtANGLJ13pEujjnQ/xoE+fiP90uRCvzRl+r3MrJ9zHvY53wgaJG4MXzR5+a1HcDoVH4xwZqf8lsByddOcYZP3egxdQjwtXvmXLroWPYtS+nIrwgvxqGtMkGx2RRCrwE7WoTPZvNc84zt6HU896BnaT2lCmfAZxaG9OAJ4tBcfoIVb9kXhiMd3jQokgPkH4uSzNxInn/fEAZS/Ik4eXRGHm7a15sgj4PVNjr5uayfwJ/vHcGkarTaxsWbHL4WHhnj/6eOER3gOpkiHGefPLS8v1HUJimPaP5Lfq+0OFbV51q0AbE66APvnf6cKt+IlT1nRKsl5pxYgDGY8Hn4DWUG7ld86HaLAtwUmFBmYqlIsRCXIEx8paTPWOmUPyq76lVMgP9k0Uh+lrm4//zVpTCmxnouCPBa86bALLO2IBa/0BeCbfAc2rZAP AS "data", 2013-11-16 08:31:13.284859 AS "timestamp";

(0.000) INSERT INTO "sentry_message" ("project_id", "logger", "level", "message", "view", "checksum", "num_comments", "platform", "group_id", "message_id", "datetime", "time_spent", "server_name", "site", "data") VALUES (4, php, 40, This is a test exception sent from the Raven CLI., , ad196ffd7ac755b551a41a59a10d21dd, 0, php, 65, 9d191db45eb9496aa3062186d1682fc3, 2013-11-16 08:31:12, None, allanwang-NB.local, , eJzTSCkw5ApWz8tPSY3PTFHnKjAC8kyM0gwTk00SU5LNjUxSTUwtgDxDo9TENAuLFCOTZBOgMmOuYj0AA40Qbw==);

(0.000) INSERT INTO "sentry_eventmapping" ("project_id", "group_id", "event_id", "date_added") VALUES (4, 65, 9d191db45eb9496aa3062186d1682fc3, 2013-11-16 08:31:13.289047);

(0.000) SELECT "sentry_projectoptions"."id", "sentry_projectoptions"."project_id", "sentry_projectoptions"."key", "sentry_projectoptions"."value" FROM "sentry_projectoptions" WHERE "sentry_projectoptions"."project_id" = 4 ;

(0.000) SELECT "sentry_projectoptions"."id", "sentry_projectoptions"."project_id", "sentry_projectoptions"."key", "sentry_projectoptions"."value" FROM "sentry_projectoptions" WHERE "sentry_projectoptions"."project_id" = 4 ;

(0.000) SELECT "sentry_projectoptions"."id", "sentry_projectoptions"."project_id", "sentry_projectoptions"."key", "sentry_projectoptions"."value" FROM "sentry_projectoptions" WHERE "sentry_projectoptions"."project_id" = 4 ;

(0.000) SELECT "sentry_projectoptions"."id", "sentry_projectoptions"."project_id", "sentry_projectoptions"."key", "sentry_projectoptions"."value" FROM "sentry_projectoptions" WHERE "sentry_projectoptions"."project_id" = 4 ;

(0.000) SELECT "sentry_useroption"."id", "sentry_useroption"."user_id", "sentry_useroption"."project_id", "sentry_useroption"."key", "sentry_useroption"."value" FROM "sentry_useroption" WHERE ("sentry_useroption"."project_id" = 4  AND "sentry_useroption"."key" = mail:alert );

(0.000) SELECT "sentry_accessgroup_members"."user_id" FROM "sentry_accessgroup" INNER JOIN "sentry_accessgroup_projects" ON ("sentry_accessgroup"."id" = "sentry_accessgroup_projects"."accessgroup_id") LEFT OUTER JOIN "sentry_accessgroup_members" ON ("sentry_accessgroup"."id" = "sentry_accessgroup_members"."accessgroup_id") LEFT OUTER JOIN "auth_user" ON ("sentry_accessgroup_members"."user_id" = "auth_user"."id") WHERE ("sentry_accessgroup_projects"."project_id" = 4  AND "auth_user"."is_active" = True );

(0.000) SELECT "sentry_teammember"."user_id" FROM "sentry_teammember" INNER JOIN "auth_user" ON ("sentry_teammember"."user_id" = "auth_user"."id") WHERE ("sentry_teammember"."team_id" = 4  AND "auth_user"."is_active" = True );

(0.000) SELECT "sentry_useroption"."user_id" FROM "sentry_useroption" WHERE ("sentry_useroption"."key" = subscribe_by_default  AND "sentry_useroption"."value" = gAJVATAu  AND "sentry_useroption"."user_id" IN (1));

(0.000) SELECT "sentry_useroption"."id", "sentry_useroption"."user_id", "sentry_useroption"."project_id", "sentry_useroption"."key", "sentry_useroption"."value" FROM "sentry_useroption" WHERE ("sentry_useroption"."project_id" = 4  AND "sentry_useroption"."key" = mail:alert ); args=(4, 'mail:alert')
(0.000) SELECT "sentry_accessgroup_members"."user_id" FROM "sentry_accessgroup" INNER JOIN "sentry_accessgroup_projects" ON ("sentry_accessgroup"."id" = "sentry_accessgroup_projects"."accessgroup_id") LEFT OUTER JOIN "sentry_accessgroup_members" ON ("sentry_accessgroup"."id" = "sentry_accessgroup_members"."accessgroup_id") LEFT OUTER JOIN "auth_user" ON ("sentry_accessgroup_members"."user_id" = "auth_user"."id") WHERE ("sentry_accessgroup_projects"."project_id" = 4  AND "auth_user"."is_active" = True ); args=(4, True)
(0.000) SELECT "sentry_teammember"."user_id" FROM "sentry_teammember" INNER JOIN "auth_user" ON ("sentry_teammember"."user_id" = "auth_user"."id") WHERE ("sentry_teammember"."team_id" = 4  AND "auth_user"."is_active" = True ); args=(4, True)
(0.000) SELECT "sentry_useroption"."user_id" FROM "sentry_useroption" WHERE ("sentry_useroption"."key" = subscribe_by_default  AND "sentry_useroption"."value" = gAJVATAu  AND "sentry_useroption"."user_id" IN (1));

(0.000) SELECT "sentry_useroption"."id", "sentry_useroption"."user_id", "sentry_useroption"."project_id", "sentry_useroption"."key", "sentry_useroption"."value" FROM "sentry_useroption" WHERE ("sentry_useroption"."project_id" = 4  AND "sentry_useroption"."user_id" IN (1) AND "sentry_useroption"."key" = mail:email ); args=(4, 1, 'mail:email')
(0.000) SELECT "sentry_useroption"."id", "sentry_useroption"."user_id", "sentry_useroption"."project_id", "sentry_useroption"."key", "sentry_useroption"."value" FROM "sentry_useroption" WHERE ("sentry_useroption"."user_id" IN (1) AND "sentry_useroption"."key" = alert_email ); args=(1, 'alert_email')
(0.000) SELECT "auth_user"."email" FROM "auth_user" WHERE ("auth_user"."id" IN (1) AND "auth_user"."is_active" = True ); args=(1, True)







(0.000) SELECT "sentry_searchdocument"."id", "sentry_searchdocument"."project_id", "sentry_searchdocument"."group_id", "sentry_searchdocument"."total_events", "sentry_searchdocument"."status", "sentry_searchdocument"."date_added", "sentry_searchdocument"."date_changed" FROM "sentry_searchdocument" WHERE ("sentry_searchdocument"."project_id" = 4  AND "sentry_searchdocument"."group_id" = 65 ); args=(4, 65)
(0.000) INSERT INTO "sentry_searchdocument" ("project_id", "group_id", "total_events", "status", "date_added", "date_changed") VALUES (4, 65, 1, 0, 2013-11-16 08:31:12, 2013-11-16 08:31:12); args=[4, 65, 1, 0, u'2013-11-16 08:31:12', u'2013-11-16 08:31:12']

(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = bin  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'bin', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, bin, 2); args=[65, 'text', u'bin', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 3 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = exception  AND "sentry_searchtoken"."document_id" = 65 ); args=(3, 'text', u'exception', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, exception, 4); args=[65, 'text', u'exception', 4]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = from  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'from', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, from, 3); args=[65, 'text', u'from', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = cli  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'cli', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, cli, 3); args=[65, 'text', u'cli', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = this  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'this', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, this, 3); args=[65, 'text', u'this', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = downloads  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'downloads', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, downloads, 2); args=[65, 'text', u'downloads', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = espresso  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'espresso', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, espresso, 2); args=[65, 'text', u'espresso', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = allanwang  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'allanwang', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, allanwang, 2); args=[65, 'text', u'allanwang', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = master  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'master', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, master, 2); args=[65, 'text', u'master', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = volumes  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'volumes', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, volumes, 2); args=[65, 'text', u'volumes', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = test  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'test', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, test, 3); args=[65, 'text', u'test', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = php  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'php', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, php, 3); args=[65, 'text', u'php', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 1 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = local  AND "sentry_searchtoken"."document_id" = 65 ); args=(1, 'text', u'local', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, local, 2); args=[65, 'text', u'local', 2]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 2 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = sent  AND "sentry_searchtoken"."document_id" = 65 ); args=(2, 'text', u'sent', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, sent, 3); args=[65, 'text', u'sent', 3]
(0.000) UPDATE "sentry_searchtoken" SET "times_seen" = "sentry_searchtoken"."times_seen" + 4 WHERE ("sentry_searchtoken"."field" = text  AND "sentry_searchtoken"."token" = raven  AND "sentry_searchtoken"."document_id" = 65 ); args=(4, 'text', u'raven', 65)
(0.000) INSERT INTO "sentry_searchtoken" ("document_id", "field", "token", "times_seen") VALUES (65, text, raven, 5); args=[65, 'text', u'raven', 5]